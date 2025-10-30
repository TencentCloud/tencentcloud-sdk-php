<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数详情
 *
 * @method string getFunctionId() 获取函数 ID。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getName() 获取函数名字。
 * @method void setName(string $Name) 设置函数名字。
 * @method string getRemark() 获取函数描述。
 * @method void setRemark(string $Remark) 设置函数描述。
 * @method string getContent() 获取函数内容。
 * @method void setContent(string $Content) 设置函数内容。
 * @method string getDomain() 获取函数默认域名。
 * @method void setDomain(string $Domain) 设置函数默认域名。
 * @method string getCreateTime() 获取创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getUpdateTime() 获取修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string 函数 ID。
     */
    public $FunctionId;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 函数名字。
     */
    public $Name;

    /**
     * @var string 函数描述。
     */
    public $Remark;

    /**
     * @var string 函数内容。
     */
    public $Content;

    /**
     * @var string 函数默认域名。
     */
    public $Domain;

    /**
     * @var string 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $CreateTime;

    /**
     * @var string 修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $UpdateTime;

    /**
     * @param string $FunctionId 函数 ID。
     * @param string $ZoneId 站点 ID。
     * @param string $Name 函数名字。
     * @param string $Remark 函数描述。
     * @param string $Content 函数内容。
     * @param string $Domain 函数默认域名。
     * @param string $CreateTime 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $UpdateTime 修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
