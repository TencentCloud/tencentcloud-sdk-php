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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义树结构遍历子节点
 *
 * @method string getParentId() 获取父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取当前文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置当前文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取当前文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置当前文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJobSet() 获取当前文件夹下的作业集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobSet(array $JobSet) 设置当前文件夹下的作业集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取迭代子目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置迭代子目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取请求ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置请求ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeTreeJobsRsp extends AbstractModel
{
    /**
     * @var string 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 当前文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 当前文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 当前文件夹下的作业集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobSet;

    /**
     * @var array 迭代子目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var string 请求ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @param string $ParentId 父节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 当前文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 当前文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $JobSet 当前文件夹下的作业集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 迭代子目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 请求ID
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("JobSet",$param) and $param["JobSet"] !== null) {
            $this->JobSet = [];
            foreach ($param["JobSet"] as $key => $value){
                $obj = new TreeJobSets();
                $obj->deserialize($value);
                array_push($this->JobSet, $obj);
            }
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new DescribeTreeJobsRsp();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
