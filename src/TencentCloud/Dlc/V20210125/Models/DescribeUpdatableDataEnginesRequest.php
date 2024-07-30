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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpdatableDataEngines请求参数结构体
 *
 * @method string getDataEngineConfigCommand() 获取引擎配置操作命令，UpdateSparkSQLLakefsPath 更新托管表路径，UpdateSparkSQLResultPath 更新结果桶路径
 * @method void setDataEngineConfigCommand(string $DataEngineConfigCommand) 设置引擎配置操作命令，UpdateSparkSQLLakefsPath 更新托管表路径，UpdateSparkSQLResultPath 更新结果桶路径
 * @method boolean getUseLakeFs() 获取是否使用托管存储作为结果存储
 * @method void setUseLakeFs(boolean $UseLakeFs) 设置是否使用托管存储作为结果存储
 * @method string getCustomResultPath() 获取用户自定义结果存储路径
 * @method void setCustomResultPath(string $CustomResultPath) 设置用户自定义结果存储路径
 */
class DescribeUpdatableDataEnginesRequest extends AbstractModel
{
    /**
     * @var string 引擎配置操作命令，UpdateSparkSQLLakefsPath 更新托管表路径，UpdateSparkSQLResultPath 更新结果桶路径
     */
    public $DataEngineConfigCommand;

    /**
     * @var boolean 是否使用托管存储作为结果存储
     */
    public $UseLakeFs;

    /**
     * @var string 用户自定义结果存储路径
     */
    public $CustomResultPath;

    /**
     * @param string $DataEngineConfigCommand 引擎配置操作命令，UpdateSparkSQLLakefsPath 更新托管表路径，UpdateSparkSQLResultPath 更新结果桶路径
     * @param boolean $UseLakeFs 是否使用托管存储作为结果存储
     * @param string $CustomResultPath 用户自定义结果存储路径
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
        if (array_key_exists("DataEngineConfigCommand",$param) and $param["DataEngineConfigCommand"] !== null) {
            $this->DataEngineConfigCommand = $param["DataEngineConfigCommand"];
        }

        if (array_key_exists("UseLakeFs",$param) and $param["UseLakeFs"] !== null) {
            $this->UseLakeFs = $param["UseLakeFs"];
        }

        if (array_key_exists("CustomResultPath",$param) and $param["CustomResultPath"] !== null) {
            $this->CustomResultPath = $param["CustomResultPath"];
        }
    }
}
