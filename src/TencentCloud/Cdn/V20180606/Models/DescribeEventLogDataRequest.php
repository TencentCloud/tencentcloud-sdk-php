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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventLogData请求参数结构体
 *
 * @method string getMode() 获取防护类型，映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
 * @method void setMode(string $Mode) 设置防护类型，映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间，最长跨度为30分钟
 * @method void setEndTime(string $EndTime) 设置结束时间，最长跨度为30分钟
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getActionName() 获取执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
参数放空，表示查询全部动作数据
 * @method void setActionName(string $ActionName) 设置执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
参数放空，表示查询全部动作数据
 * @method string getUrl() 获取请求URL，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
 * @method void setUrl(string $Url) 设置请求URL，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
 * @method string getArea() 获取地域 mainland 或者 overseas，为空时默认 mainland
 * @method void setArea(string $Area) 设置地域 mainland 或者 overseas，为空时默认 mainland
 * @method string getSource() 获取来源产品，cdn 或者 ecdn，为空时默认 cdn
 * @method void setSource(string $Source) 设置来源产品，cdn 或者 ecdn，为空时默认 cdn
 */
class DescribeEventLogDataRequest extends AbstractModel
{
    /**
     * @var string 防护类型，映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
     */
    public $Mode;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间，最长跨度为30分钟
     */
    public $EndTime;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
参数放空，表示查询全部动作数据
     */
    public $ActionName;

    /**
     * @var string 请求URL，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
     */
    public $Url;

    /**
     * @var string 地域 mainland 或者 overseas，为空时默认 mainland
     */
    public $Area;

    /**
     * @var string 来源产品，cdn 或者 ecdn，为空时默认 cdn
     */
    public $Source;

    /**
     * @param string $Mode 防护类型，映射如下：
  waf = "Web攻击"
  cc = "CC攻击"
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间，最长跨度为30分钟
     * @param string $Domain 域名
     * @param string $ActionName 执行动作，取值为：intercept/redirect/observe
分别表示：拦截/重定向/观察
参数放空，表示查询全部动作数据
     * @param string $Url 请求URL，支持URL开头和结尾使用\*表示通配
如：
/files/* 表示所有以/files/开头的请求
*.jpg 表示所有以.jpg结尾的请求
     * @param string $Area 地域 mainland 或者 overseas，为空时默认 mainland
     * @param string $Source 来源产品，cdn 或者 ecdn，为空时默认 cdn
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
