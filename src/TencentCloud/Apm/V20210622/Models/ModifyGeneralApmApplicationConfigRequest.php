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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGeneralApmApplicationConfig请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统Id
 * @method void setInstanceId(string $InstanceId) 设置业务系统Id
 * @method array getTags() 获取需要修改的字段key value分别指定字段名、字段值
[具体字段请见](https://cloud.tencent.com/document/product/248/111241)
 * @method void setTags(array $Tags) 设置需要修改的字段key value分别指定字段名、字段值
[具体字段请见](https://cloud.tencent.com/document/product/248/111241)
 * @method array getServiceNames() 获取需要修改配置的应用列表名称	
 * @method void setServiceNames(array $ServiceNames) 设置需要修改配置的应用列表名称	
 */
class ModifyGeneralApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string 业务系统Id
     */
    public $InstanceId;

    /**
     * @var array 需要修改的字段key value分别指定字段名、字段值
[具体字段请见](https://cloud.tencent.com/document/product/248/111241)
     */
    public $Tags;

    /**
     * @var array 需要修改配置的应用列表名称	
     */
    public $ServiceNames;

    /**
     * @param string $InstanceId 业务系统Id
     * @param array $Tags 需要修改的字段key value分别指定字段名、字段值
[具体字段请见](https://cloud.tencent.com/document/product/248/111241)
     * @param array $ServiceNames 需要修改配置的应用列表名称	
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ServiceNames",$param) and $param["ServiceNames"] !== null) {
            $this->ServiceNames = $param["ServiceNames"];
        }
    }
}
