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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组对象
 *
 * @method string getSecurityGroupId() 获取<p>安全组实例ID，例如：sg-ohuuioma。</p>
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置<p>安全组实例ID，例如：sg-ohuuioma。</p>
 * @method string getSecurityGroupName() 获取<p>安全组名称，可任意命名，但不得超过60个字符。</p>
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置<p>安全组名称，可任意命名，但不得超过60个字符。</p>
 * @method string getSecurityGroupDesc() 获取<p>安全组备注，最多100个字符。</p>
 * @method void setSecurityGroupDesc(string $SecurityGroupDesc) 设置<p>安全组备注，最多100个字符。</p>
 * @method string getProjectId() 获取<p>项目id，默认0。可在qcloud控制台项目管理页面查询到。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id，默认0。可在qcloud控制台项目管理页面查询到。</p>
 * @method boolean getIsDefault() 获取<p>是否是默认安全组，默认安全组不支持删除。</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否是默认安全组，默认安全组不支持删除。</p>
 * @method string getCreatedTime() 获取<p>安全组创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>安全组创建时间。</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 * @method string getUpdateTime() 获取<p>安全组更新时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>安全组更新时间。</p>
 * @method boolean getServiceManaged() 获取<p>是否为托管安全组</p>
 * @method void setServiceManaged(boolean $ServiceManaged) 设置<p>是否为托管安全组</p>
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string <p>安全组实例ID，例如：sg-ohuuioma。</p>
     */
    public $SecurityGroupId;

    /**
     * @var string <p>安全组名称，可任意命名，但不得超过60个字符。</p>
     */
    public $SecurityGroupName;

    /**
     * @var string <p>安全组备注，最多100个字符。</p>
     */
    public $SecurityGroupDesc;

    /**
     * @var string <p>项目id，默认0。可在qcloud控制台项目管理页面查询到。</p>
     */
    public $ProjectId;

    /**
     * @var boolean <p>是否是默认安全组，默认安全组不支持删除。</p>
     */
    public $IsDefault;

    /**
     * @var string <p>安全组创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @var string <p>安全组更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>是否为托管安全组</p>
     */
    public $ServiceManaged;

    /**
     * @param string $SecurityGroupId <p>安全组实例ID，例如：sg-ohuuioma。</p>
     * @param string $SecurityGroupName <p>安全组名称，可任意命名，但不得超过60个字符。</p>
     * @param string $SecurityGroupDesc <p>安全组备注，最多100个字符。</p>
     * @param string $ProjectId <p>项目id，默认0。可在qcloud控制台项目管理页面查询到。</p>
     * @param boolean $IsDefault <p>是否是默认安全组，默认安全组不支持删除。</p>
     * @param string $CreatedTime <p>安全组创建时间。</p>
     * @param array $TagSet <p>标签键值对。</p>
     * @param string $UpdateTime <p>安全组更新时间。</p>
     * @param boolean $ServiceManaged <p>是否为托管安全组</p>
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

        if (array_key_exists("ServiceManaged",$param) and $param["ServiceManaged"] !== null) {
            $this->ServiceManaged = $param["ServiceManaged"];
        }
    }
}
