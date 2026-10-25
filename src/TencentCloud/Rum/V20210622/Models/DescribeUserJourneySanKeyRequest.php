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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserJourneySanKey请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method string getPlatform() 获取<p>平台</p>
 * @method void setPlatform(string $Platform) 设置<p>平台</p>
 * @method string getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(string $Filters) 设置<p>过滤条件</p>
 * @method integer getTopPagesPerStep() 获取<p>每一步骤的数量</p>
 * @method void setTopPagesPerStep(integer $TopPagesPerStep) 设置<p>每一步骤的数量</p>
 * @method integer getMinSessionThreshold() 获取<p>每一个节点最小的会话数量</p>
 * @method void setMinSessionThreshold(integer $MinSessionThreshold) 设置<p>每一个节点最小的会话数量</p>
 * @method string getStartPage() 获取<p>开始页面</p>
 * @method void setStartPage(string $StartPage) 设置<p>开始页面</p>
 * @method string getEndPage() 获取<p>结束页面</p>
 * @method void setEndPage(string $EndPage) 设置<p>结束页面</p>
 * @method boolean getHasStruggle() 获取<p>是否有挣扎事件</p>
 * @method void setHasStruggle(boolean $HasStruggle) 设置<p>是否有挣扎事件</p>
 */
class DescribeUserJourneySanKeyRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>平台</p>
     */
    public $Platform;

    /**
     * @var string <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>每一步骤的数量</p>
     */
    public $TopPagesPerStep;

    /**
     * @var integer <p>每一个节点最小的会话数量</p>
     */
    public $MinSessionThreshold;

    /**
     * @var string <p>开始页面</p>
     */
    public $StartPage;

    /**
     * @var string <p>结束页面</p>
     */
    public $EndPage;

    /**
     * @var boolean <p>是否有挣扎事件</p>
     */
    public $HasStruggle;

    /**
     * @param string $AppId <p>应用id</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param string $Platform <p>平台</p>
     * @param string $Filters <p>过滤条件</p>
     * @param integer $TopPagesPerStep <p>每一步骤的数量</p>
     * @param integer $MinSessionThreshold <p>每一个节点最小的会话数量</p>
     * @param string $StartPage <p>开始页面</p>
     * @param string $EndPage <p>结束页面</p>
     * @param boolean $HasStruggle <p>是否有挣扎事件</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("TopPagesPerStep",$param) and $param["TopPagesPerStep"] !== null) {
            $this->TopPagesPerStep = $param["TopPagesPerStep"];
        }

        if (array_key_exists("MinSessionThreshold",$param) and $param["MinSessionThreshold"] !== null) {
            $this->MinSessionThreshold = $param["MinSessionThreshold"];
        }

        if (array_key_exists("StartPage",$param) and $param["StartPage"] !== null) {
            $this->StartPage = $param["StartPage"];
        }

        if (array_key_exists("EndPage",$param) and $param["EndPage"] !== null) {
            $this->EndPage = $param["EndPage"];
        }

        if (array_key_exists("HasStruggle",$param) and $param["HasStruggle"] !== null) {
            $this->HasStruggle = $param["HasStruggle"];
        }
    }
}
