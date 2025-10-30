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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据接入cvm数据源
 *
 * @method string getVpcId() 获取数据源所属vpc id，创建后不允许修改
 * @method void setVpcId(string $VpcId) 设置数据源所属vpc id，创建后不允许修改
 * @method array getCvmIds() 获取cvm列表
 * @method void setCvmIds(array $CvmIds) 设置cvm列表
 * @method array getLogPaths() 获取采集路径列表，支持通配符
 * @method void setLogPaths(array $LogPaths) 设置采集路径列表，支持通配符
 */
class DiSourceCvm extends AbstractModel
{
    /**
     * @var string 数据源所属vpc id，创建后不允许修改
     */
    public $VpcId;

    /**
     * @var array cvm列表
     */
    public $CvmIds;

    /**
     * @var array 采集路径列表，支持通配符
     */
    public $LogPaths;

    /**
     * @param string $VpcId 数据源所属vpc id，创建后不允许修改
     * @param array $CvmIds cvm列表
     * @param array $LogPaths 采集路径列表，支持通配符
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CvmIds",$param) and $param["CvmIds"] !== null) {
            $this->CvmIds = $param["CvmIds"];
        }

        if (array_key_exists("LogPaths",$param) and $param["LogPaths"] !== null) {
            $this->LogPaths = $param["LogPaths"];
        }
    }
}
