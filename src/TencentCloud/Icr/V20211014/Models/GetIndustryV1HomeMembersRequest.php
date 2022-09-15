<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetIndustryV1HomeMembers请求参数结构体
 *
 * @method GetIndustryV1HomeMembersReqPayload getPayload() 获取无
 * @method void setPayload(GetIndustryV1HomeMembersReqPayload $Payload) 设置无
 * @method ReqMetadata getMetadata() 获取无
 * @method void setMetadata(ReqMetadata $Metadata) 设置无
 */
class GetIndustryV1HomeMembersRequest extends AbstractModel
{
    /**
     * @var GetIndustryV1HomeMembersReqPayload 无
     */
    public $Payload;

    /**
     * @var ReqMetadata 无
     */
    public $Metadata;

    /**
     * @param GetIndustryV1HomeMembersReqPayload $Payload 无
     * @param ReqMetadata $Metadata 无
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = new GetIndustryV1HomeMembersReqPayload();
            $this->Payload->deserialize($param["Payload"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new ReqMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }
    }
}
