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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 浏览事件详情
 *
 * @method string getPageType() 获取<p>当前浏览网页的类型，例如主页、搜索页等</p>
 * @method void setPageType(string $PageType) 设置<p>当前浏览网页的类型，例如主页、搜索页等</p>
 * @method string getPageUrl() 获取<p>当前浏览的网页URL</p>
 * @method void setPageUrl(string $PageUrl) 设置<p>当前浏览的网页URL</p>
 * @method integer getDuration() 获取<p>浏览耗时</p><p>单位：毫秒</p>
 * @method void setDuration(integer $Duration) 设置<p>浏览耗时</p><p>单位：毫秒</p>
 * @method string getContentType() 获取<p>网页内容类型，例如广告、视频、文章等</p>
 * @method void setContentType(string $ContentType) 设置<p>网页内容类型，例如广告、视频、文章等</p>
 * @method string getContentId() 获取<p>网页内容ID</p>
 * @method void setContentId(string $ContentId) 设置<p>网页内容ID</p>
 * @method string getReferPageType() 获取<p>上一个网页的类型，例如主页、搜索页等</p>
 * @method void setReferPageType(string $ReferPageType) 设置<p>上一个网页的类型，例如主页、搜索页等</p>
 * @method string getReferPageUrl() 获取<p>上一个网页URL</p>
 * @method void setReferPageUrl(string $ReferPageUrl) 设置<p>上一个网页URL</p>
 * @method string getGuestId() 获取<p>游客账号ID</p>
 * @method void setGuestId(string $GuestId) 设置<p>游客账号ID</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class BrowseEvent extends AbstractModel
{
    /**
     * @var string <p>当前浏览网页的类型，例如主页、搜索页等</p>
     */
    public $PageType;

    /**
     * @var string <p>当前浏览的网页URL</p>
     */
    public $PageUrl;

    /**
     * @var integer <p>浏览耗时</p><p>单位：毫秒</p>
     */
    public $Duration;

    /**
     * @var string <p>网页内容类型，例如广告、视频、文章等</p>
     */
    public $ContentType;

    /**
     * @var string <p>网页内容ID</p>
     */
    public $ContentId;

    /**
     * @var string <p>上一个网页的类型，例如主页、搜索页等</p>
     */
    public $ReferPageType;

    /**
     * @var string <p>上一个网页URL</p>
     */
    public $ReferPageUrl;

    /**
     * @var string <p>游客账号ID</p>
     */
    public $GuestId;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $PageType <p>当前浏览网页的类型，例如主页、搜索页等</p>
     * @param string $PageUrl <p>当前浏览的网页URL</p>
     * @param integer $Duration <p>浏览耗时</p><p>单位：毫秒</p>
     * @param string $ContentType <p>网页内容类型，例如广告、视频、文章等</p>
     * @param string $ContentId <p>网页内容ID</p>
     * @param string $ReferPageType <p>上一个网页的类型，例如主页、搜索页等</p>
     * @param string $ReferPageUrl <p>上一个网页URL</p>
     * @param string $GuestId <p>游客账号ID</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("PageType",$param) and $param["PageType"] !== null) {
            $this->PageType = $param["PageType"];
        }

        if (array_key_exists("PageUrl",$param) and $param["PageUrl"] !== null) {
            $this->PageUrl = $param["PageUrl"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("ReferPageType",$param) and $param["ReferPageType"] !== null) {
            $this->ReferPageType = $param["ReferPageType"];
        }

        if (array_key_exists("ReferPageUrl",$param) and $param["ReferPageUrl"] !== null) {
            $this->ReferPageUrl = $param["ReferPageUrl"];
        }

        if (array_key_exists("GuestId",$param) and $param["GuestId"] !== null) {
            $this->GuestId = $param["GuestId"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
