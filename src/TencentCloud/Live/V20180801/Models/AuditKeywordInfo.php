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
 * 直播审核关键词查询信息。
 *
 * @method string getKeywordId() 获取关键词 Id。
 * @method void setKeywordId(string $KeywordId) 设置关键词 Id。
 * @method string getContent() 获取关键词内容。
 * @method void setContent(string $Content) 设置关键词内容。
 * @method string getLabel() 获取关键词标签。
可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。
 * @method void setLabel(string $Label) 设置关键词标签。
可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。
 * @method string getCreateTime() 获取创建时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：
1. 北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：
1. 北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示。
 */
class AuditKeywordInfo extends AbstractModel
{
    /**
     * @var string 关键词 Id。
     */
    public $KeywordId;

    /**
     * @var string 关键词内容。
     */
    public $Content;

    /**
     * @var string 关键词标签。
可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。
     */
    public $Label;

    /**
     * @var string 创建时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：
1. 北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示。
     */
    public $CreateTime;

    /**
     * @param string $KeywordId 关键词 Id。
     * @param string $Content 关键词内容。
     * @param string $Label 关键词标签。
可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。
     * @param string $CreateTime 创建时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：
1. 北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示。
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
        if (array_key_exists("KeywordId",$param) and $param["KeywordId"] !== null) {
            $this->KeywordId = $param["KeywordId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
