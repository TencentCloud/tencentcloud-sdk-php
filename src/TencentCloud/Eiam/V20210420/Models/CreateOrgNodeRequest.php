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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrgNode请求参数结构体
 *
 * @method string getDisplayName() 获取机构节点名称，长度限制：64个字符。
 * @method void setDisplayName(string $DisplayName) 设置机构节点名称，长度限制：64个字符。
 * @method string getParentOrgNodeId() 获取父机构节点ID，如果为空则默认创建在机构根节点下。
 * @method void setParentOrgNodeId(string $ParentOrgNodeId) 设置父机构节点ID，如果为空则默认创建在机构根节点下。
 * @method string getDescription() 获取机构节点描述。
 * @method void setDescription(string $Description) 设置机构节点描述。
 * @method string getCustomizedOrgNodeId() 获取机构代码。如果为空，则默认生成机构代码。如果为非空，则校验机构代码的唯一性。
 * @method void setCustomizedOrgNodeId(string $CustomizedOrgNodeId) 设置机构代码。如果为空，则默认生成机构代码。如果为非空，则校验机构代码的唯一性。
 */
class CreateOrgNodeRequest extends AbstractModel
{
    /**
     * @var string 机构节点名称，长度限制：64个字符。
     */
    public $DisplayName;

    /**
     * @var string 父机构节点ID，如果为空则默认创建在机构根节点下。
     */
    public $ParentOrgNodeId;

    /**
     * @var string 机构节点描述。
     */
    public $Description;

    /**
     * @var string 机构代码。如果为空，则默认生成机构代码。如果为非空，则校验机构代码的唯一性。
     */
    public $CustomizedOrgNodeId;

    /**
     * @param string $DisplayName 机构节点名称，长度限制：64个字符。
     * @param string $ParentOrgNodeId 父机构节点ID，如果为空则默认创建在机构根节点下。
     * @param string $Description 机构节点描述。
     * @param string $CustomizedOrgNodeId 机构代码。如果为空，则默认生成机构代码。如果为非空，则校验机构代码的唯一性。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ParentOrgNodeId",$param) and $param["ParentOrgNodeId"] !== null) {
            $this->ParentOrgNodeId = $param["ParentOrgNodeId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomizedOrgNodeId",$param) and $param["CustomizedOrgNodeId"] !== null) {
            $this->CustomizedOrgNodeId = $param["CustomizedOrgNodeId"];
        }
    }
}
