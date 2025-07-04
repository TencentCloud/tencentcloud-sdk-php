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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccessExport请求参数结构体
 *
 * @method string getExportId() 获取日志导出ID
 * @method void setExportId(string $ExportId) 设置日志导出ID
 * @method string getTopicId() 获取日志主题
 * @method void setTopicId(string $TopicId) 设置日志主题
 */
class DeleteAccessExportRequest extends AbstractModel
{
    /**
     * @var string 日志导出ID
     */
    public $ExportId;

    /**
     * @var string 日志主题
     */
    public $TopicId;

    /**
     * @param string $ExportId 日志导出ID
     * @param string $TopicId 日志主题
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
        if (array_key_exists("ExportId",$param) and $param["ExportId"] !== null) {
            $this->ExportId = $param["ExportId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
