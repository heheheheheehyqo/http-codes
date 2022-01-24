<?php

namespace PHPSTORM_META {

    registerArgumentsSet(
        'codes',
        \Hyqo\HTTP\HTTPCode::CONTINUE,
        \Hyqo\HTTP\HTTPCode::SWITCHING_PROTOCOLS,
        \Hyqo\HTTP\HTTPCode::PROCESSING,
        \Hyqo\HTTP\HTTPCode::EARLY_HINTS,
        \Hyqo\HTTP\HTTPCode::OK,
        \Hyqo\HTTP\HTTPCode::CREATED,
        \Hyqo\HTTP\HTTPCode::ACCEPTED,
        \Hyqo\HTTP\HTTPCode::NON_AUTHORITATIVE_INFORMATION,
        \Hyqo\HTTP\HTTPCode::NO_CONTENT,
        \Hyqo\HTTP\HTTPCode::RESET_CONTENT,
        \Hyqo\HTTP\HTTPCode::PARTIAL_CONTENT,
        \Hyqo\HTTP\HTTPCode::MULTI_STATUS,
        \Hyqo\HTTP\HTTPCode::ALREADY_REPORTED,
        \Hyqo\HTTP\HTTPCode::IM_USED,
        \Hyqo\HTTP\HTTPCode::MULTIPLE_CHOICES,
        \Hyqo\HTTP\HTTPCode::MOVED_PERMANENTLY,
        \Hyqo\HTTP\HTTPCode::FOUND,
        \Hyqo\HTTP\HTTPCode::SEE_OTHER,
        \Hyqo\HTTP\HTTPCode::NOT_MODIFIED,
        \Hyqo\HTTP\HTTPCode::USE_PROXY,
        \Hyqo\HTTP\HTTPCode::SWITCH_PROXY,
        \Hyqo\HTTP\HTTPCode::TEMPORARY_REDIRECT,
        \Hyqo\HTTP\HTTPCode::PERMANENT_REDIRECT,
        \Hyqo\HTTP\HTTPCode::BAD_REQUEST,
        \Hyqo\HTTP\HTTPCode::UNAUTHORIZED,
        \Hyqo\HTTP\HTTPCode::PAYMENT_REQUIRED,
        \Hyqo\HTTP\HTTPCode::FORBIDDEN,
        \Hyqo\HTTP\HTTPCode::NOT_FOUND,
        \Hyqo\HTTP\HTTPCode::METHOD_NOT_ALLOWED,
        \Hyqo\HTTP\HTTPCode::NOT_ACCEPTABLE,
        \Hyqo\HTTP\HTTPCode::PROXY_AUTHENTICATION_REQUIRED,
        \Hyqo\HTTP\HTTPCode::REQUEST_TIMEOUT,
        \Hyqo\HTTP\HTTPCode::CONFLICT,
        \Hyqo\HTTP\HTTPCode::GONE,
        \Hyqo\HTTP\HTTPCode::LENGTH_REQUIRED,
        \Hyqo\HTTP\HTTPCode::PRECONDITION_FAILED,
        \Hyqo\HTTP\HTTPCode::PAYLOAD_TOO_LARGE,
        \Hyqo\HTTP\HTTPCode::URI_TOO_LARGE,
        \Hyqo\HTTP\HTTPCode::UNSUPPORTED_MEDIA_TYPE,
        \Hyqo\HTTP\HTTPCode::RANGE_NOT_SATISFIABLE,
        \Hyqo\HTTP\HTTPCode::EXPECTATION_FAILED,
        \Hyqo\HTTP\HTTPCode::IM_A_TEAPOT,
        \Hyqo\HTTP\HTTPCode::MISDIRECTED_REQUEST,
        \Hyqo\HTTP\HTTPCode::UNPROCESSABLE_ENTITY,
        \Hyqo\HTTP\HTTPCode::LOCKED,
        \Hyqo\HTTP\HTTPCode::FAILED_DEPENDENCY,
        \Hyqo\HTTP\HTTPCode::TOO_EARLY,
        \Hyqo\HTTP\HTTPCode::UPGRADE_REQUIRED,
        \Hyqo\HTTP\HTTPCode::PRECONDITION_REQUIRED,
        \Hyqo\HTTP\HTTPCode::TOO_MANY_REQUESTS,
        \Hyqo\HTTP\HTTPCode::REQUEST_HEADER_FIELDS_TOO_LARGE,
        \Hyqo\HTTP\HTTPCode::UNAVAILABLE_FOR_LEGAL_REASONS,
        \Hyqo\HTTP\HTTPCode::INTERNAL_SERVER_ERROR,
        \Hyqo\HTTP\HTTPCode::NOT_IMPLEMENTED,
        \Hyqo\HTTP\HTTPCode::BAD_GATEWAY,
        \Hyqo\HTTP\HTTPCode::SERVICE_UNAVAILABLE,
        \Hyqo\HTTP\HTTPCode::GATEWAY_TIMEOUT,
        \Hyqo\HTTP\HTTPCode::HTTP_VERSION_NOT_SUPPORTED,
        \Hyqo\HTTP\HTTPCode::VARIANT_ALSO_NEGOTIATES,
        \Hyqo\HTTP\HTTPCode::INSUFFICIENT_STORAGE,
        \Hyqo\HTTP\HTTPCode::LOOP_DETECTED,
        \Hyqo\HTTP\HTTPCode::NOT_EXTENDED,
        \Hyqo\HTTP\HTTPCode::NETWORK_AUTHENTICATION_REQUIRED
    );

    expectedArguments(\Hyqo\HTTP\HTTPCode::__construct(), 0, argumentsSet('codes'));
    expectedArguments(\Hyqo\HTTP\HTTPCode::version(), 0, argumentsSet('codes'));
    expectedArguments(\Hyqo\HTTP\HTTPCode::message(), 0, argumentsSet('codes'));
}
