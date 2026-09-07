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
 * @method string getFunctionId() 获取<p>函数 ID。</p>
 * @method void setFunctionId(string $FunctionId) 设置<p>函数 ID。</p>
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getName() 获取<p>函数名字。</p>
 * @method void setName(string $Name) 设置<p>函数名字。</p>
 * @method string getRemark() 获取<p>函数描述。</p>
 * @method void setRemark(string $Remark) 设置<p>函数描述。</p>
 * @method string getContent() 获取<p>函数内容。</p>
 * @method void setContent(string $Content) 设置<p>函数内容。</p>
 * @method string getDomain() 获取<p>函数默认域名。</p>
 * @method void setDomain(string $Domain) 设置<p>函数默认域名。</p>
 * @method array getDomainComplianceRestrictions() 获取<p>边缘函数默认域名因合规问题产生的地区访问限制列表。</p>
 * @method void setDomainComplianceRestrictions(array $DomainComplianceRestrictions) 设置<p>边缘函数默认域名因合规问题产生的地区访问限制列表。</p>
 * @method string getCreateTime() 获取<p>创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method string getUpdateTime() 获取<p>修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string <p>函数 ID。</p>
     */
    public $FunctionId;

    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>函数名字。</p>
     */
    public $Name;

    /**
     * @var string <p>函数描述。</p>
     */
    public $Remark;

    /**
     * @var string <p>函数内容。</p>
     */
    public $Content;

    /**
     * @var string <p>函数默认域名。</p>
     */
    public $Domain;

    /**
     * @var array <p>边缘函数默认域名因合规问题产生的地区访问限制列表。</p>
     */
    public $DomainComplianceRestrictions;

    /**
     * @var string <p>创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
     */
    public $UpdateTime;

    /**
     * @param string $FunctionId <p>函数 ID。</p>
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Name <p>函数名字。</p>
     * @param string $Remark <p>函数描述。</p>
     * @param string $Content <p>函数内容。</p>
     * @param string $Domain <p>函数默认域名。</p>
     * @param array $DomainComplianceRestrictions <p>边缘函数默认域名因合规问题产生的地区访问限制列表。</p>
     * @param string $CreateTime <p>创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
     * @param string $UpdateTime <p>修改时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
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

        if (array_key_exists("DomainComplianceRestrictions",$param) and $param["DomainComplianceRestrictions"] !== null) {
            $this->DomainComplianceRestrictions = [];
            foreach ($param["DomainComplianceRestrictions"] as $key => $value){
                $obj = new ComplianceRestriction();
                $obj->deserialize($value);
                array_push($this->DomainComplianceRestrictions, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
