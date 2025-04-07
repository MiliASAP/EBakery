﻿using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Filters;
using WebAPIDemo.Models;

namespace WebAPIDemo.Filters.ActionFilters
{
    public class Shirt_ValidateShirtUpdayeFilterAttribute : ActionFilterAttribute
    {
        public override void OnActionExecuting(ActionExecutingContext context)
        {
            base.OnActionExecuting(context);

            var id = context.ActionArguments["id"] as int?;
            var shirt = context.ActionArguments["shirt"] as Shirt;

            if(id.HasValue && shirt != null && id != shirt.ShirtId)
            {
                context.ModelState.AddModelError("Shirt","ShirtId is not the same as id.");
                var problemDetail = new ValidationProblemDetails(context.ModelState)
                {
                    Status = StatusCodes.Status400BadRequest
                };
                context.Result = new BadRequestObjectResult(problemDetail);
            }

        }
    }
}
