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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportScreenPage请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getPageId() 获取页面id
 * @method void setPageId(string $PageId) 设置页面id
 * @method string getCanvasType() 获取画布类型。栅格画布：GRID；自由画布：FREE
 * @method void setCanvasType(string $CanvasType) 设置画布类型。栅格画布：GRID；自由画布：FREE
 * @method string getPicType() 获取图片导出类型。base64；url（有效期：1天）
 * @method void setPicType(string $PicType) 设置图片导出类型。base64；url（有效期：1天）
 * @method array getWidgetIds() 获取组件Ids。为空时，导出整个页面
 * @method void setWidgetIds(array $WidgetIds) 设置组件Ids。为空时，导出整个页面
 * @method boolean getAsyncRequest() 获取是否是异步请求
 * @method void setAsyncRequest(boolean $AsyncRequest) 设置是否是异步请求
 * @method string getTranId() 获取事务id
 * @method void setTranId(string $TranId) 设置事务id
 */
class ExportScreenPageRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 页面id
     */
    public $PageId;

    /**
     * @var string 画布类型。栅格画布：GRID；自由画布：FREE
     */
    public $CanvasType;

    /**
     * @var string 图片导出类型。base64；url（有效期：1天）
     */
    public $PicType;

    /**
     * @var array 组件Ids。为空时，导出整个页面
     */
    public $WidgetIds;

    /**
     * @var boolean 是否是异步请求
     */
    public $AsyncRequest;

    /**
     * @var string 事务id
     */
    public $TranId;

    /**
     * @param string $ProjectId 项目id
     * @param string $PageId 页面id
     * @param string $CanvasType 画布类型。栅格画布：GRID；自由画布：FREE
     * @param string $PicType 图片导出类型。base64；url（有效期：1天）
     * @param array $WidgetIds 组件Ids。为空时，导出整个页面
     * @param boolean $AsyncRequest 是否是异步请求
     * @param string $TranId 事务id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("CanvasType",$param) and $param["CanvasType"] !== null) {
            $this->CanvasType = $param["CanvasType"];
        }

        if (array_key_exists("PicType",$param) and $param["PicType"] !== null) {
            $this->PicType = $param["PicType"];
        }

        if (array_key_exists("WidgetIds",$param) and $param["WidgetIds"] !== null) {
            $this->WidgetIds = $param["WidgetIds"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }
    }
}
