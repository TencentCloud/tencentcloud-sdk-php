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
 * CreateProtectGroup请求参数结构体
 *
 * @method string getName() 获取<p>防护对象组名称</p>
 * @method void setName(string $Name) 设置<p>防护对象组名称</p>
 * @method array getDomains() 获取<p>防护对象组的应用范围</p>
 * @method void setDomains(array $Domains) 设置<p>防护对象组的应用范围</p>
 * @method string getRemark() 获取<p>防护对象组备注</p>
 * @method void setRemark(string $Remark) 设置<p>防护对象组备注</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class CreateProtectGroupRequest extends AbstractModel
{
    /**
     * @var string <p>防护对象组名称</p>
     */
    public $Name;

    /**
     * @var array <p>防护对象组的应用范围</p>
     */
    public $Domains;

    /**
     * @var string <p>防护对象组备注</p>
     */
    public $Remark;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>防护对象组名称</p>
     * @param array $Domains <p>防护对象组的应用范围</p>
     * @param string $Remark <p>防护对象组备注</p>
     * @param array $Tags <p>标签信息</p>
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
