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
 * 采集器配置项
 *
 * @method string getFileName() 获取采集器的主配置文件名，如filebeat.yml，metricbeat.yml等
 * @method void setFileName(string $FileName) 设置采集器的主配置文件名，如filebeat.yml，metricbeat.yml等
 * @method string getFileContent() 获取采集器的主配置文件内容
 * @method void setFileContent(string $FileContent) 设置采集器的主配置文件内容
 */
class CollectorConfigInfo extends AbstractModel
{
    /**
     * @var string 采集器的主配置文件名，如filebeat.yml，metricbeat.yml等
     */
    public $FileName;

    /**
     * @var string 采集器的主配置文件内容
     */
    public $FileContent;

    /**
     * @param string $FileName 采集器的主配置文件名，如filebeat.yml，metricbeat.yml等
     * @param string $FileContent 采集器的主配置文件内容
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
