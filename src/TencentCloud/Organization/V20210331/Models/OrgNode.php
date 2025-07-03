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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业组织单元
 *
 * @method integer getNodeId() 获取组织节点ID
 * @method void setNodeId(integer $NodeId) 设置组织节点ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getParentNodeId() 获取父节点ID
 * @method void setParentNodeId(integer $ParentNodeId) 设置父节点ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method array getTags() 获取成员标签列表
 * @method void setTags(array $Tags) 设置成员标签列表
 */
class OrgNode extends AbstractModel
{
    /**
     * @var integer 组织节点ID
     */
    public $NodeId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 父节点ID
     */
    public $ParentNodeId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 成员标签列表
     */
    public $Tags;

    /**
     * @param integer $NodeId 组织节点ID
     * @param string $Name 名称
     * @param integer $ParentNodeId 父节点ID
     * @param string $Remark 备注
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param array $Tags 成员标签列表
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
