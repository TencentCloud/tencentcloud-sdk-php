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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccountGroupResources请求参数结构体
 *
 * @method array getResourceList() 获取资源集
 * @method void setResourceList(array $ResourceList) 设置资源集
 * @method integer getAccountGroupId() 获取账户组Id(只支持32位)
 * @method void setAccountGroupId(integer $AccountGroupId) 设置账户组Id(只支持32位)
 */
class DeleteAccountGroupResourcesRequest extends AbstractModel
{
    /**
     * @var array 资源集
     */
    public $ResourceList;

    /**
     * @var integer 账户组Id(只支持32位)
     */
    public $AccountGroupId;

    /**
     * @param array $ResourceList 资源集
     * @param integer $AccountGroupId 账户组Id(只支持32位)
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
        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new DeleteResourceData();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }
    }
}
