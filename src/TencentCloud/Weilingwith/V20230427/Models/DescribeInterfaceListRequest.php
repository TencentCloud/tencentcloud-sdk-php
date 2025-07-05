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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInterfaceList请求参数结构体
 *
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getPageNumber() 获取请求页号
 * @method void setPageNumber(integer $PageNumber) 设置请求页号
 * @method integer getPageSize() 获取请求页容量，默认全量返回
 * @method void setPageSize(integer $PageSize) 设置请求页容量，默认全量返回
 * @method string getKeyword() 获取查询关键字
 * @method void setKeyword(string $Keyword) 设置查询关键字
 * @method array getStyle() 获取接口方式 1.http 2消息通知服务
 * @method void setStyle(array $Style) 设置接口方式 1.http 2消息通知服务
 * @method array getType() 获取接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务 8.3DTiles服务
 * @method void setType(array $Type) 设置接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务 8.3DTiles服务
 */
class DescribeInterfaceListRequest extends AbstractModel
{
    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 请求页号
     */
    public $PageNumber;

    /**
     * @var integer 请求页容量，默认全量返回
     */
    public $PageSize;

    /**
     * @var string 查询关键字
     */
    public $Keyword;

    /**
     * @var array 接口方式 1.http 2消息通知服务
     */
    public $Style;

    /**
     * @var array 接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务 8.3DTiles服务
     */
    public $Type;

    /**
     * @param string $ApplicationToken 应用token
     * @param integer $PageNumber 请求页号
     * @param integer $PageSize 请求页容量，默认全量返回
     * @param string $Keyword 查询关键字
     * @param array $Style 接口方式 1.http 2消息通知服务
     * @param array $Type 接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务 8.3DTiles服务
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
        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
