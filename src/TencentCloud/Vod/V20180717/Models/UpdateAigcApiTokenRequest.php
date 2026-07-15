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
 * UpdateAigcApiToken请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getApiToken() 获取<p>要更新Api Key</p>
 * @method void setApiToken(string $ApiToken) 设置<p>要更新Api Key</p>
 * @method string getActionType() 获取<p>Merge（默认，对 ExtInfo JSON 按顶层 key 合并）、Overwrite（直接覆盖）</p>
 * @method void setActionType(string $ActionType) 设置<p>Merge（默认，对 ExtInfo JSON 按顶层 key 合并）、Overwrite（直接覆盖）</p>
 * @method string getExtInfo() 获取<p>token 的扩展信息</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>token 的扩展信息</p>
 */
class UpdateAigcApiTokenRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>要更新Api Key</p>
     */
    public $ApiToken;

    /**
     * @var string <p>Merge（默认，对 ExtInfo JSON 按顶层 key 合并）、Overwrite（直接覆盖）</p>
     */
    public $ActionType;

    /**
     * @var string <p>token 的扩展信息</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $ApiToken <p>要更新Api Key</p>
     * @param string $ActionType <p>Merge（默认，对 ExtInfo JSON 按顶层 key 合并）、Overwrite（直接覆盖）</p>
     * @param string $ExtInfo <p>token 的扩展信息</p>
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

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
