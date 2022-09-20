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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点拨测配置
 *
 * @method integer getTaskType() 获取任务类型，取值有：
<li>1：页面性能;</li>
<li>2：文件上传;</li>
<li>3：文件下载;</li>
<li>4：端口性能;</li>
<li>5：网络质量;</li>
<li>6：音视频体验。</li>
 * @method void setTaskType(integer $TaskType) 设置任务类型，取值有：
<li>1：页面性能;</li>
<li>2：文件上传;</li>
<li>3：文件下载;</li>
<li>4：端口性能;</li>
<li>5：网络质量;</li>
<li>6：音视频体验。</li>
 * @method string getUrl() 获取拨测 url。
 * @method void setUrl(string $Url) 设置拨测 url。
 * @method string getUA() 获取拨测 UA。
 * @method void setUA(string $UA) 设置拨测 UA。
 * @method string getConnectivity() 获取网络类型。
 * @method void setConnectivity(string $Connectivity) 设置网络类型。
 */
class SpeedTestingConfig extends AbstractModel
{
    /**
     * @var integer 任务类型，取值有：
<li>1：页面性能;</li>
<li>2：文件上传;</li>
<li>3：文件下载;</li>
<li>4：端口性能;</li>
<li>5：网络质量;</li>
<li>6：音视频体验。</li>
     */
    public $TaskType;

    /**
     * @var string 拨测 url。
     */
    public $Url;

    /**
     * @var string 拨测 UA。
     */
    public $UA;

    /**
     * @var string 网络类型。
     */
    public $Connectivity;

    /**
     * @param integer $TaskType 任务类型，取值有：
<li>1：页面性能;</li>
<li>2：文件上传;</li>
<li>3：文件下载;</li>
<li>4：端口性能;</li>
<li>5：网络质量;</li>
<li>6：音视频体验。</li>
     * @param string $Url 拨测 url。
     * @param string $UA 拨测 UA。
     * @param string $Connectivity 网络类型。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }
    }
}
