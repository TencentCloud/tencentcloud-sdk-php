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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditRule请求参数结构体
 *
 * @method string getDomainName() 获取<p>推流域名。</p>
 * @method void setDomainName(string $DomainName) 设置<p>推流域名。</p>
 * @method string getAppName() 获取<p>推流路径，与推流和播放地址中的AppName 保持一致。</p>
 * @method void setAppName(string $AppName) 设置<p>推流路径，与推流和播放地址中的AppName 保持一致。</p>
 * @method integer getTemplateId() 获取<p>审核模板 ID。</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>审核模板 ID。</p>
 * @method string getStreamName() 获取<p>流名称。 不传默认为空。</p>
 * @method void setStreamName(string $StreamName) 设置<p>流名称。 不传默认为空。</p>
 */
class CreateAuditRuleRequest extends AbstractModel
{
    /**
     * @var string <p>推流域名。</p>
     */
    public $DomainName;

    /**
     * @var string <p>推流路径，与推流和播放地址中的AppName 保持一致。</p>
     */
    public $AppName;

    /**
     * @var integer <p>审核模板 ID。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>流名称。 不传默认为空。</p>
     */
    public $StreamName;

    /**
     * @param string $DomainName <p>推流域名。</p>
     * @param string $AppName <p>推流路径，与推流和播放地址中的AppName 保持一致。</p>
     * @param integer $TemplateId <p>审核模板 ID。</p>
     * @param string $StreamName <p>流名称。 不传默认为空。</p>
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
