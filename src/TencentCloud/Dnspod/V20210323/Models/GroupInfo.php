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
 * 域名分组列表
 *
 * @method integer getGroupId() 获取分组ID
 * @method void setGroupId(integer $GroupId) 设置分组ID
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getGroupType() 获取分组类型
 * @method void setGroupType(string $GroupType) 设置分组类型
 * @method integer getSize() 获取该分组中域名个数
 * @method void setSize(integer $Size) 设置该分组中域名个数
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var integer 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 分组类型
     */
    public $GroupType;

    /**
     * @var integer 该分组中域名个数
     */
    public $Size;

    /**
     * @param integer $GroupId 分组ID
     * @param string $GroupName 分组名称
     * @param string $GroupType 分组类型
     * @param integer $Size 该分组中域名个数
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
