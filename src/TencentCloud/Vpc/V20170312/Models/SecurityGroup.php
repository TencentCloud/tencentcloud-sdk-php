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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组对象
 *
 * @method string getSecurityGroupId() 获取安全组实例ID，例如：sg-ohuuioma。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如：sg-ohuuioma。
 * @method string getSecurityGroupName() 获取安全组名称，可任意命名，但不得超过60个字符。
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置安全组名称，可任意命名，但不得超过60个字符。
 * @method string getSecurityGroupDesc() 获取安全组备注，最多100个字符。
 * @method void setSecurityGroupDesc(string $SecurityGroupDesc) 设置安全组备注，最多100个字符。
 * @method string getProjectId() 获取项目id，默认0。可在qcloud控制台项目管理页面查询到。
 * @method void setProjectId(string $ProjectId) 设置项目id，默认0。可在qcloud控制台项目管理页面查询到。
 * @method boolean getIsDefault() 获取是否是默认安全组，默认安全组不支持删除。
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认安全组，默认安全组不支持删除。
 * @method string getCreatedTime() 获取安全组创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置安全组创建时间。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method string getUpdateTime() 获取安全组更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置安全组更新时间。
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string 安全组实例ID，例如：sg-ohuuioma。
     */
    public $SecurityGroupId;

    /**
     * @var string 安全组名称，可任意命名，但不得超过60个字符。
     */
    public $SecurityGroupName;

    /**
     * @var string 安全组备注，最多100个字符。
     */
    public $SecurityGroupDesc;

    /**
     * @var string 项目id，默认0。可在qcloud控制台项目管理页面查询到。
     */
    public $ProjectId;

    /**
     * @var boolean 是否是默认安全组，默认安全组不支持删除。
     */
    public $IsDefault;

    /**
     * @var string 安全组创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var string 安全组更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $SecurityGroupId 安全组实例ID，例如：sg-ohuuioma。
     * @param string $SecurityGroupName 安全组名称，可任意命名，但不得超过60个字符。
     * @param string $SecurityGroupDesc 安全组备注，最多100个字符。
     * @param string $ProjectId 项目id，默认0。可在qcloud控制台项目管理页面查询到。
     * @param boolean $IsDefault 是否是默认安全组，默认安全组不支持删除。
     * @param string $CreatedTime 安全组创建时间。
     * @param array $TagSet 标签键值对。
     * @param string $UpdateTime 安全组更新时间。
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupDesc",$param) and $param["SecurityGroupDesc"] !== null) {
            $this->SecurityGroupDesc = $param["SecurityGroupDesc"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
