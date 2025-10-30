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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改参数任务数据
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getClusterParamList() 获取集群参数修改数据
 * @method void setClusterParamList(array $ClusterParamList) 设置集群参数修改数据
 * @method array getModifyInstanceParams() 获取实例参数修改数据
 * @method void setModifyInstanceParams(array $ModifyInstanceParams) 设置实例参数修改数据
 */
class BizTaskModifyParamsData extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 集群参数修改数据
     */
    public $ClusterParamList;

    /**
     * @var array 实例参数修改数据
     */
    public $ModifyInstanceParams;

    /**
     * @param string $ClusterId 集群ID
     * @param array $ClusterParamList 集群参数修改数据
     * @param array $ModifyInstanceParams 实例参数修改数据
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterParamList",$param) and $param["ClusterParamList"] !== null) {
            $this->ClusterParamList = [];
            foreach ($param["ClusterParamList"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParamList, $obj);
            }
        }

        if (array_key_exists("ModifyInstanceParams",$param) and $param["ModifyInstanceParams"] !== null) {
            $this->ModifyInstanceParams = [];
            foreach ($param["ModifyInstanceParams"] as $key => $value){
                $obj = new BizTaskModifyInstanceParam();
                $obj->deserialize($value);
                array_push($this->ModifyInstanceParams, $obj);
            }
        }
    }
}
