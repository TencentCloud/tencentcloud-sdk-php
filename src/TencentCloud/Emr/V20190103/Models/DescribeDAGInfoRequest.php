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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDAGInfo请求参数结构体
 *
 * @method string getInstanceID() 获取集群ID
 * @method void setInstanceID(string $InstanceID) 设置集群ID
 * @method string getType() 获取DAG类型，目前只支持STARROCKS
 * @method void setType(string $Type) 设置DAG类型，目前只支持STARROCKS
 * @method array getIDList() 获取查询ID列表,最大长度为1
 * @method void setIDList(array $IDList) 设置查询ID列表,最大长度为1
 */
class DescribeDAGInfoRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceID;

    /**
     * @var string DAG类型，目前只支持STARROCKS
     */
    public $Type;

    /**
     * @var array 查询ID列表,最大长度为1
     */
    public $IDList;

    /**
     * @param string $InstanceID 集群ID
     * @param string $Type DAG类型，目前只支持STARROCKS
     * @param array $IDList 查询ID列表,最大长度为1
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }
    }
}
