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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAigcQuota请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><strong>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</strong></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><strong>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</strong></p>
 * @method string getQuotaType() 获取<p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
 * @method void setQuotaType(string $QuotaType) 设置<p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
 * @method string getApiToken() 获取<p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
 * @method void setApiToken(string $ApiToken) 设置<p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
 */
class DeleteAigcQuotaRequest extends AbstractModel
{
    /**
     * @var integer <p><strong>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</strong></p>
     */
    public $SubAppId;

    /**
     * @var string <p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
     */
    public $ApiToken;

    /**
     * @param integer $SubAppId <p><strong>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</strong></p>
     * @param string $QuotaType <p>配额类型</p><p>枚举值：</p><ul><li>Image： AIGC 生图任务</li><li>Video： AIGC 生视频任务</li><li>Text： AIGC 生文任务</li></ul>
     * @param string $ApiToken <p>仅当QuotaLimit=Text时有效，用于选择需要进行配额限制ApiToken</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }
    }
}
