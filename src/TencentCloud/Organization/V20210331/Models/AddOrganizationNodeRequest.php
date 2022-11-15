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
 * AddOrganizationNode请求参数结构体
 *
 * @method integer getParentNodeId() 获取父节点ID。可以调用DescribeOrganizationNodes获取
 * @method void setParentNodeId(integer $ParentNodeId) 设置父节点ID。可以调用DescribeOrganizationNodes获取
 * @method string getName() 获取节点名称。最大长度为40个字符，支持英文字母、数字、汉字、符号+@、&._[]-
 * @method void setName(string $Name) 设置节点名称。最大长度为40个字符，支持英文字母、数字、汉字、符号+@、&._[]-
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 */
class AddOrganizationNodeRequest extends AbstractModel
{
    /**
     * @var integer 父节点ID。可以调用DescribeOrganizationNodes获取
     */
    public $ParentNodeId;

    /**
     * @var string 节点名称。最大长度为40个字符，支持英文字母、数字、汉字、符号+@、&._[]-
     */
    public $Name;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @param integer $ParentNodeId 父节点ID。可以调用DescribeOrganizationNodes获取
     * @param string $Name 节点名称。最大长度为40个字符，支持英文字母、数字、汉字、符号+@、&._[]-
     * @param string $Remark 备注。
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
        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
