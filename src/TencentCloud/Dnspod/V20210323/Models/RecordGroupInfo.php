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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 解析记录分组信息
 *
 * @method integer getGroupId() 获取分组 ID
 * @method void setGroupId(integer $GroupId) 设置分组 ID
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getGroupType() 获取分组类型：system-系统；user-用户
 * @method void setGroupType(string $GroupType) 设置分组类型：system-系统；user-用户
 */
class RecordGroupInfo extends AbstractModel
{
    /**
     * @var integer 分组 ID
     */
    public $GroupId;

    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 分组类型：system-系统；user-用户
     */
    public $GroupType;

    /**
     * @param integer $GroupId 分组 ID
     * @param string $GroupName 分组名称
     * @param string $GroupType 分组类型：system-系统；user-用户
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }
    }
}
