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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞情报扫描结果
 *
 * @method integer getCustomerId() 获取<p>客户ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>客户ID</p>
 * @method string getCustomerName() 获取<p>客户名称</p>
 * @method void setCustomerName(string $CustomerName) 设置<p>客户名称</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method string getBanner() 获取<p>指纹</p>
 * @method void setBanner(string $Banner) 设置<p>指纹</p>
 * @method string getScreenshotUrl() 获取<p>截图预览</p>
 * @method void setScreenshotUrl(string $ScreenshotUrl) 设置<p>截图预览</p>
 * @method boolean getIsAffected() 获取<p>是否受影响</p>
 * @method void setIsAffected(boolean $IsAffected) 设置<p>是否受影响</p>
 * @method string getUrl() 获取<p>网址</p>
 * @method void setUrl(string $Url) 设置<p>网址</p>
 */
class IntelligenceResult extends AbstractModel
{
    /**
     * @var integer <p>客户ID</p>
     */
    public $CustomerId;

    /**
     * @var string <p>客户名称</p>
     */
    public $CustomerName;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var string <p>指纹</p>
     */
    public $Banner;

    /**
     * @var string <p>截图预览</p>
     */
    public $ScreenshotUrl;

    /**
     * @var boolean <p>是否受影响</p>
     */
    public $IsAffected;

    /**
     * @var string <p>网址</p>
     */
    public $Url;

    /**
     * @param integer $CustomerId <p>客户ID</p>
     * @param string $CustomerName <p>客户名称</p>
     * @param string $Title <p>标题</p>
     * @param string $Banner <p>指纹</p>
     * @param string $ScreenshotUrl <p>截图预览</p>
     * @param boolean $IsAffected <p>是否受影响</p>
     * @param string $Url <p>网址</p>
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Banner",$param) and $param["Banner"] !== null) {
            $this->Banner = $param["Banner"];
        }

        if (array_key_exists("ScreenshotUrl",$param) and $param["ScreenshotUrl"] !== null) {
            $this->ScreenshotUrl = $param["ScreenshotUrl"];
        }

        if (array_key_exists("IsAffected",$param) and $param["IsAffected"] !== null) {
            $this->IsAffected = $param["IsAffected"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
