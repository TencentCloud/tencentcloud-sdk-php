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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQCluster请求参数结构体
 *
 * @method string getName() 获取集群名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setName(string $Name) 设置集群名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method string getRemark() 获取集群描述，128个字符以内
 * @method void setRemark(string $Remark) 设置集群描述，128个字符以内
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 */
class CreateRocketMQClusterRequest extends AbstractModel
{
    /**
     * @var string 集群名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $Name;

    /**
     * @var string 集群描述，128个字符以内
     */
    public $Remark;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @param string $Name 集群名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param string $Remark 集群描述，128个字符以内
     * @param array $TagList 标签列表
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
