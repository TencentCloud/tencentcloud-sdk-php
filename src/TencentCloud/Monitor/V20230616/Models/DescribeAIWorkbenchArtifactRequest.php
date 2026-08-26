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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIWorkbenchArtifact请求参数结构体
 *
 * @method string getArtifactId() 获取<p>产物 ID</p>
 * @method void setArtifactId(string $ArtifactId) 设置<p>产物 ID</p>
 * @method integer getNeedDownloadURL() 获取<p>是否需要下载 URL</p><p><code>1</code> = 需要，<code>0</code> 或不传 = 不需要</p>
 * @method void setNeedDownloadURL(integer $NeedDownloadURL) 设置<p>是否需要下载 URL</p><p><code>1</code> = 需要，<code>0</code> 或不传 = 不需要</p>
 */
class DescribeAIWorkbenchArtifactRequest extends AbstractModel
{
    /**
     * @var string <p>产物 ID</p>
     */
    public $ArtifactId;

    /**
     * @var integer <p>是否需要下载 URL</p><p><code>1</code> = 需要，<code>0</code> 或不传 = 不需要</p>
     */
    public $NeedDownloadURL;

    /**
     * @param string $ArtifactId <p>产物 ID</p>
     * @param integer $NeedDownloadURL <p>是否需要下载 URL</p><p><code>1</code> = 需要，<code>0</code> 或不传 = 不需要</p>
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
        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("NeedDownloadURL",$param) and $param["NeedDownloadURL"] !== null) {
            $this->NeedDownloadURL = $param["NeedDownloadURL"];
        }
    }
}
