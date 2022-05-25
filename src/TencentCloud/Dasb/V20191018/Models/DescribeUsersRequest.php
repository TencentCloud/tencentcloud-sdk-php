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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsers请求参数结构体
 *
 * @method array getIdSet() 获取如果IdSet不为空，则忽略其他参数
 * @method void setIdSet(array $IdSet) 设置如果IdSet不为空，则忽略其他参数
 * @method string getName() 获取模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
 * @method void setName(string $Name) 设置模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
 * @method integer getOffset() 获取分页，偏移位置
 * @method void setOffset(integer $Offset) 设置分页，偏移位置
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 * @method string getUserName() 获取精确查询，IdSet为空时才生效
 * @method void setUserName(string $UserName) 设置精确查询，IdSet为空时才生效
 * @method string getPhone() 获取精确查询，IdSet、UserName为空时才生效
 * @method void setPhone(string $Phone) 设置精确查询，IdSet、UserName为空时才生效
 * @method array getAuthorizedDeviceIdSet() 获取有访问权限的主机ID集合
 * @method void setAuthorizedDeviceIdSet(array $AuthorizedDeviceIdSet) 设置有访问权限的主机ID集合
 * @method array getAuthTypeSet() 获取认证方式，0-本地，1-ldap, 2-oauth 不传为全部
 * @method void setAuthTypeSet(array $AuthTypeSet) 设置认证方式，0-本地，1-ldap, 2-oauth 不传为全部
 */
class DescribeUsersRequest extends AbstractModel
{
    /**
     * @var array 如果IdSet不为空，则忽略其他参数
     */
    public $IdSet;

    /**
     * @var string 模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
     */
    public $Name;

    /**
     * @var integer 分页，偏移位置
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @var string 精确查询，IdSet为空时才生效
     */
    public $UserName;

    /**
     * @var string 精确查询，IdSet、UserName为空时才生效
     */
    public $Phone;

    /**
     * @var array 有访问权限的主机ID集合
     */
    public $AuthorizedDeviceIdSet;

    /**
     * @var array 认证方式，0-本地，1-ldap, 2-oauth 不传为全部
     */
    public $AuthTypeSet;

    /**
     * @param array $IdSet 如果IdSet不为空，则忽略其他参数
     * @param string $Name 模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
     * @param integer $Offset 分页，偏移位置
     * @param integer $Limit 每页条目数量，默认20
     * @param string $UserName 精确查询，IdSet为空时才生效
     * @param string $Phone 精确查询，IdSet、UserName为空时才生效
     * @param array $AuthorizedDeviceIdSet 有访问权限的主机ID集合
     * @param array $AuthTypeSet 认证方式，0-本地，1-ldap, 2-oauth 不传为全部
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("AuthorizedDeviceIdSet",$param) and $param["AuthorizedDeviceIdSet"] !== null) {
            $this->AuthorizedDeviceIdSet = $param["AuthorizedDeviceIdSet"];
        }

        if (array_key_exists("AuthTypeSet",$param) and $param["AuthTypeSet"] !== null) {
            $this->AuthTypeSet = $param["AuthTypeSet"];
        }
    }
}
