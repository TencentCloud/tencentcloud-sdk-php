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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBusinessIntelligenceFile请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method array getStatusSet() 获取迁移任务状态集合,1-初始化待部署 2-部署中 3-部署成功 4-部署失败
 * @method void setStatusSet(array $StatusSet) 设置迁移任务状态集合,1-初始化待部署 2-部署中 3-部署成功 4-部署失败
 * @method string getFileType() 获取文件类型 FLAT-平面文件，SSIS商业智能服务项目文件
 * @method void setFileType(string $FileType) 设置文件类型 FLAT-平面文件，SSIS商业智能服务项目文件
 * @method integer getLimit() 获取分页，页大小，范围1-100
 * @method void setLimit(integer $Limit) 设置分页，页大小，范围1-100
 * @method integer getOffset() 获取分页,页数，默认0
 * @method void setOffset(integer $Offset) 设置分页,页数，默认0
 * @method string getOrderBy() 获取排序字段，可选值file_name,create_time,start_time
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选值file_name,create_time,start_time
 * @method string getOrderByType() 获取排序方式，desc,asc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，desc,asc
 */
class DescribeBusinessIntelligenceFileRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var array 迁移任务状态集合,1-初始化待部署 2-部署中 3-部署成功 4-部署失败
     */
    public $StatusSet;

    /**
     * @var string 文件类型 FLAT-平面文件，SSIS商业智能服务项目文件
     */
    public $FileType;

    /**
     * @var integer 分页，页大小，范围1-100
     */
    public $Limit;

    /**
     * @var integer 分页,页数，默认0
     */
    public $Offset;

    /**
     * @var string 排序字段，可选值file_name,create_time,start_time
     */
    public $OrderBy;

    /**
     * @var string 排序方式，desc,asc
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例ID
     * @param string $FileName 文件名称
     * @param array $StatusSet 迁移任务状态集合,1-初始化待部署 2-部署中 3-部署成功 4-部署失败
     * @param string $FileType 文件类型 FLAT-平面文件，SSIS商业智能服务项目文件
     * @param integer $Limit 分页，页大小，范围1-100
     * @param integer $Offset 分页,页数，默认0
     * @param string $OrderBy 排序字段，可选值file_name,create_time,start_time
     * @param string $OrderByType 排序方式，desc,asc
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
