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
 * 域名概览明细
 *
 * @method string getName() 获取域名
 * @method void setName(string $Name) 设置域名
 * @method string getGrade() 获取域名套餐代码
 * @method void setGrade(string $Grade) 设置域名套餐代码
 * @method string getGradeTitle() 获取域名套餐名称
 * @method void setGradeTitle(string $GradeTitle) 设置域名套餐名称
 * @method integer getRecords() 获取域名记录数
 * @method void setRecords(integer $Records) 设置域名记录数
 * @method integer getDomainParkingStatus() 获取域名停靠状态。0 未开启 1 已开启 2 已暂停
 * @method void setDomainParkingStatus(integer $DomainParkingStatus) 设置域名停靠状态。0 未开启 1 已开启 2 已暂停
 * @method integer getLineCount() 获取自定义线路数量
 * @method void setLineCount(integer $LineCount) 设置自定义线路数量
 * @method integer getLineGroupCount() 获取自定义线路分组数量
 * @method void setLineGroupCount(integer $LineGroupCount) 设置自定义线路分组数量
 * @method integer getAliasCount() 获取域名别名数量
 * @method void setAliasCount(integer $AliasCount) 设置域名别名数量
 * @method integer getMaxAliasCount() 获取允许添加的最大域名别名数量
 * @method void setMaxAliasCount(integer $MaxAliasCount) 设置允许添加的最大域名别名数量
 * @method integer getResolveCount() 获取昨天的解析量
 * @method void setResolveCount(integer $ResolveCount) 设置昨天的解析量
 * @method integer getVASCount() 获取增值服务数量
 * @method void setVASCount(integer $VASCount) 设置增值服务数量
 */
class PreviewDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Name;

    /**
     * @var string 域名套餐代码
     */
    public $Grade;

    /**
     * @var string 域名套餐名称
     */
    public $GradeTitle;

    /**
     * @var integer 域名记录数
     */
    public $Records;

    /**
     * @var integer 域名停靠状态。0 未开启 1 已开启 2 已暂停
     */
    public $DomainParkingStatus;

    /**
     * @var integer 自定义线路数量
     */
    public $LineCount;

    /**
     * @var integer 自定义线路分组数量
     */
    public $LineGroupCount;

    /**
     * @var integer 域名别名数量
     */
    public $AliasCount;

    /**
     * @var integer 允许添加的最大域名别名数量
     */
    public $MaxAliasCount;

    /**
     * @var integer 昨天的解析量
     */
    public $ResolveCount;

    /**
     * @var integer 增值服务数量
     */
    public $VASCount;

    /**
     * @param string $Name 域名
     * @param string $Grade 域名套餐代码
     * @param string $GradeTitle 域名套餐名称
     * @param integer $Records 域名记录数
     * @param integer $DomainParkingStatus 域名停靠状态。0 未开启 1 已开启 2 已暂停
     * @param integer $LineCount 自定义线路数量
     * @param integer $LineGroupCount 自定义线路分组数量
     * @param integer $AliasCount 域名别名数量
     * @param integer $MaxAliasCount 允许添加的最大域名别名数量
     * @param integer $ResolveCount 昨天的解析量
     * @param integer $VASCount 增值服务数量
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = $param["Records"];
        }

        if (array_key_exists("DomainParkingStatus",$param) and $param["DomainParkingStatus"] !== null) {
            $this->DomainParkingStatus = $param["DomainParkingStatus"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("LineGroupCount",$param) and $param["LineGroupCount"] !== null) {
            $this->LineGroupCount = $param["LineGroupCount"];
        }

        if (array_key_exists("AliasCount",$param) and $param["AliasCount"] !== null) {
            $this->AliasCount = $param["AliasCount"];
        }

        if (array_key_exists("MaxAliasCount",$param) and $param["MaxAliasCount"] !== null) {
            $this->MaxAliasCount = $param["MaxAliasCount"];
        }

        if (array_key_exists("ResolveCount",$param) and $param["ResolveCount"] !== null) {
            $this->ResolveCount = $param["ResolveCount"];
        }

        if (array_key_exists("VASCount",$param) and $param["VASCount"] !== null) {
            $this->VASCount = $param["VASCount"];
        }
    }
}
