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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (Caller) 用于描述调用方属性。
 *
 * @method string getApplicationId() 获取应用号
 * @method void setApplicationId(string $ApplicationId) 设置应用号
 * @method string getOrganizationId() 获取主机构ID
 * @method void setOrganizationId(string $OrganizationId) 设置主机构ID
 * @method string getOperatorId() 获取经办人的用户ID
 * @method void setOperatorId(string $OperatorId) 设置经办人的用户ID
 * @method string getSubOrganizationId() 获取下属机构ID
 * @method void setSubOrganizationId(string $SubOrganizationId) 设置下属机构ID
 */
class Caller extends AbstractModel
{
    /**
     * @var string 应用号
     */
    public $ApplicationId;

    /**
     * @var string 主机构ID
     */
    public $OrganizationId;

    /**
     * @var string 经办人的用户ID
     */
    public $OperatorId;

    /**
     * @var string 下属机构ID
     */
    public $SubOrganizationId;

    /**
     * @param string $ApplicationId 应用号
     * @param string $OrganizationId 主机构ID
     * @param string $OperatorId 经办人的用户ID
     * @param string $SubOrganizationId 下属机构ID
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("SubOrganizationId",$param) and $param["SubOrganizationId"] !== null) {
            $this->SubOrganizationId = $param["SubOrganizationId"];
        }
    }
}
