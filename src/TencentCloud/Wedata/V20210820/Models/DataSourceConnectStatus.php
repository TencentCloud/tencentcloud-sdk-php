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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源云梯连接状态
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method integer getConnectResult() 获取连接结果
 * @method void setConnectResult(integer $ConnectResult) 设置连接结果
 * @method string getConnectError() 获取错误信息
 * @method void setConnectError(string $ConnectError) 设置错误信息
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 */
class DataSourceConnectStatus extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var integer 连接结果
     */
    public $ConnectResult;

    /**
     * @var string 错误信息
     */
    public $ConnectError;

    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @param integer $Id id
     * @param string $ProjectId 项目id
     * @param string $DatasourceId 数据源id
     * @param integer $ConnectResult 连接结果
     * @param string $ConnectError 错误信息
     * @param integer $Timestamp 时间戳
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ConnectResult",$param) and $param["ConnectResult"] !== null) {
            $this->ConnectResult = $param["ConnectResult"];
        }

        if (array_key_exists("ConnectError",$param) and $param["ConnectError"] !== null) {
            $this->ConnectError = $param["ConnectError"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
