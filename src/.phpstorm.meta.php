<?php

namespace PHPSTORM_META {

    registerArgumentsSet(
        'codes',
        \Hyqo\HTTP\HttpCode::CONTINUE,
        \Hyqo\HTTP\HttpCode::SWITCHING_PROTOCOLS,
        \Hyqo\HTTP\HttpCode::PROCESSING,
        \Hyqo\HTTP\HttpCode::EARLY_HINTS,
        \Hyqo\HTTP\HttpCode::OK,
        \Hyqo\HTTP\HttpCode::CREATED,
        \Hyqo\HTTP\HttpCode::ACCEPTED,
        \Hyqo\HTTP\HttpCode::NON_AUTHORITATIVE_INFORMATION,
        \Hyqo\HTTP\HttpCode::NO_CONTENT,
        \Hyqo\HTTP\HttpCode::RESET_CONTENT,
        \Hyqo\HTTP\HttpCode::PARTIAL_CONTENT,
        \Hyqo\HTTP\HttpCode::MULTI_STATUS,
        \Hyqo\HTTP\HttpCode::ALREADY_REPORTED,
        \Hyqo\HTTP\HttpCode::IM_USED,
        \Hyqo\HTTP\HttpCode::MULTIPLE_CHOICES,
        \Hyqo\HTTP\HttpCode::MOVED_PERMANENTLY,
        \Hyqo\HTTP\HttpCode::FOUND,
        \Hyqo\HTTP\HttpCode::SEE_OTHER,
        \Hyqo\HTTP\HttpCode::NOT_MODIFIED,
        \Hyqo\HTTP\HttpCode::USE_PROXY,
        \Hyqo\HTTP\HttpCode::SWITCH_PROXY,
        \Hyqo\HTTP\HttpCode::TEMPORARY_REDIRECT,
        \Hyqo\HTTP\HttpCode::PERMANENT_REDIRECT,
        \Hyqo\HTTP\HttpCode::BAD_REQUEST,
        \Hyqo\HTTP\HttpCode::UNAUTHORIZED,
        \Hyqo\HTTP\HttpCode::PAYMENT_REQUIRED,
        \Hyqo\HTTP\HttpCode::FORBIDDEN,
        \Hyqo\HTTP\HttpCode::NOT_FOUND,
        \Hyqo\HTTP\HttpCode::METHOD_NOT_ALLOWED,
        \Hyqo\HTTP\HttpCode::NOT_ACCEPTABLE,
        \Hyqo\HTTP\HttpCode::PROXY_AUTHENTICATION_REQUIRED,
        \Hyqo\HTTP\HttpCode::REQUEST_TIMEOUT,
        \Hyqo\HTTP\HttpCode::CONFLICT,
        \Hyqo\HTTP\HttpCode::GONE,
        \Hyqo\HTTP\HttpCode::LENGTH_REQUIRED,
        \Hyqo\HTTP\HttpCode::PRECONDITION_FAILED,
        \Hyqo\HTTP\HttpCode::PAYLOAD_TOO_LARGE,
        \Hyqo\HTTP\HttpCode::URI_TOO_LARGE,
        \Hyqo\HTTP\HttpCode::UNSUPPORTED_MEDIA_TYPE,
        \Hyqo\HTTP\HttpCode::RANGE_NOT_SATISFIABLE,
        \Hyqo\HTTP\HttpCode::EXPECTATION_FAILED,
        \Hyqo\HTTP\HttpCode::IM_A_TEAPOT,
        \Hyqo\HTTP\HttpCode::MISDIRECTED_REQUEST,
        \Hyqo\HTTP\HttpCode::UNPROCESSABLE_ENTITY,
        \Hyqo\HTTP\HttpCode::LOCKED,
        \Hyqo\HTTP\HttpCode::FAILED_DEPENDENCY,
        \Hyqo\HTTP\HttpCode::TOO_EARLY,
        \Hyqo\HTTP\HttpCode::UPGRADE_REQUIRED,
        \Hyqo\HTTP\HttpCode::PRECONDITION_REQUIRED,
        \Hyqo\HTTP\HttpCode::TOO_MANY_REQUESTS,
        \Hyqo\HTTP\HttpCode::REQUEST_HEADER_FIELDS_TOO_LARGE,
        \Hyqo\HTTP\HttpCode::UNAVAILABLE_FOR_LEGAL_REASONS,
        \Hyqo\HTTP\HttpCode::INTERNAL_SERVER_ERROR,
        \Hyqo\HTTP\HttpCode::NOT_IMPLEMENTED,
        \Hyqo\HTTP\HttpCode::BAD_GATEWAY,
        \Hyqo\HTTP\HttpCode::SERVICE_UNAVAILABLE,
        \Hyqo\HTTP\HttpCode::GATEWAY_TIMEOUT,
        \Hyqo\HTTP\HttpCode::HTTP_VERSION_NOT_SUPPORTED,
        \Hyqo\HTTP\HttpCode::VARIANT_ALSO_NEGOTIATES,
        \Hyqo\HTTP\HttpCode::INSUFFICIENT_STORAGE,
        \Hyqo\HTTP\HttpCode::LOOP_DETECTED,
        \Hyqo\HTTP\HttpCode::NOT_EXTENDED,
        \Hyqo\HTTP\HttpCode::NETWORK_AUTHENTICATION_REQUIRED
    );

    expectedArguments(\Hyqo\HTTP\HttpCode::__construct(), 0, argumentsSet('codes'));
    expectedArguments(\Hyqo\HTTP\HttpCode::getVersion(), 0, argumentsSet('codes'));
    expectedArguments(\Hyqo\HTTP\HttpCode::getMessage(), 0, argumentsSet('codes'));
}
