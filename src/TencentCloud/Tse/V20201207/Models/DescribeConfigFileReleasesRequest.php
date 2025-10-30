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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigFileReleases请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getLimit() 获取条数
 * @method void setLimit(integer $Limit) 设置条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroup() 获取配置分组
 * @method void setGroup(string $Group) 设置配置分组
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method boolean getOnlyUse() 获取只保护处于使用状态
 * @method void setOnlyUse(boolean $OnlyUse) 设置只保护处于使用状态
 * @method string getReleaseName() 获取发布名称
 * @method void setReleaseName(string $ReleaseName) 设置发布名称
 * @method string getOrderField() 获取排序字段，mtime/version/name
，默认version
 * @method void setOrderField(string $OrderField) 设置排序字段，mtime/version/name
，默认version
 * @method string getOrderDesc() 获取排序，asc/desc，默认 desc
 * @method void setOrderDesc(string $OrderDesc) 设置排序，asc/desc，默认 desc
 * @method string getId() 获取配置发布ID
 * @method void setId(string $Id) 设置配置发布ID
 */
class DescribeConfigFileReleasesRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 配置分组
     */
    public $Group;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var boolean 只保护处于使用状态
     */
    public $OnlyUse;

    /**
     * @var string 发布名称
     */
    public $ReleaseName;

    /**
     * @var string 排序字段，mtime/version/name
，默认version
     */
    public $OrderField;

    /**
     * @var string 排序，asc/desc，默认 desc
     */
    public $OrderDesc;

    /**
     * @var string 配置发布ID
     */
    public $Id;

    /**
     * @param string $InstanceId 实例id
     * @param integer $Limit 条数
     * @param integer $Offset 偏移量
     * @param string $Namespace 命名空间
     * @param string $Group 配置分组
     * @param string $FileName 文件名称
     * @param boolean $OnlyUse 只保护处于使用状态
     * @param string $ReleaseName 发布名称
     * @param string $OrderField 排序字段，mtime/version/name
，默认version
     * @param string $OrderDesc 排序，asc/desc，默认 desc
     * @param string $Id 配置发布ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("OnlyUse",$param) and $param["OnlyUse"] !== null) {
            $this->OnlyUse = $param["OnlyUse"];
        }

        if (array_key_exists("ReleaseName",$param) and $param["ReleaseName"] !== null) {
            $this->ReleaseName = $param["ReleaseName"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDesc",$param) and $param["OrderDesc"] !== null) {
            $this->OrderDesc = $param["OrderDesc"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
