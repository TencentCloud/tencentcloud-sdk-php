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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtectGroup请求参数结构体
 *
 * @method string getName() 获取防护对象组名称
 * @method void setName(string $Name) 设置防护对象组名称
 * @method integer getGroupId() 获取防护对象组ID
 * @method void setGroupId(integer $GroupId) 设置防护对象组ID
 * @method string getRemark() 获取防护对象组备注
 * @method void setRemark(string $Remark) 设置防护对象组备注
 * @method array getDomains() 获取防护对象组的应用范围
 * @method void setDomains(array $Domains) 设置防护对象组的应用范围
 */
class ModifyProtectGroupRequest extends AbstractModel
{
    /**
     * @var string 防护对象组名称
     */
    public $Name;

    /**
     * @var integer 防护对象组ID
     */
    public $GroupId;

    /**
     * @var string 防护对象组备注
     */
    public $Remark;

    /**
     * @var array 防护对象组的应用范围
     */
    public $Domains;

    /**
     * @param string $Name 防护对象组名称
     * @param integer $GroupId 防护对象组ID
     * @param string $Remark 防护对象组备注
     * @param array $Domains 防护对象组的应用范围
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
