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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDEMBusinessSystem请求参数结构体
 *
 * @method string getInstanceName() 获取<p>业务系统名称（必填）</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>业务系统名称（必填）</p>
 * @method string getInstanceDesc() 获取<p>业务系统描述（可选）</p>
 * @method void setInstanceDesc(string $InstanceDesc) 设置<p>业务系统描述（可选）</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class CreateTDEMBusinessSystemRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统名称（必填）</p>
     */
    public $InstanceName;

    /**
     * @var string <p>业务系统描述（可选）</p>
     */
    public $InstanceDesc;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $InstanceName <p>业务系统名称（必填）</p>
     * @param string $InstanceDesc <p>业务系统描述（可选）</p>
     * @param array $Tags <p>标签列表</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
