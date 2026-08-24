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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMsgRecordList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method array getFilterList() 获取<ul><li><strong>ChannelType</strong> :   0-表示全部 2-体验页面（腾讯云）3-调试页面（腾讯云）4-体验页面（手机号）5-对话端API接入 6-应用评测 7-调试API&#39; 10000-微信服务号 10001-微信订阅号 10002-企微应用 10004-微信客服 10005-微信小程序 10006-腾讯元器 10007-应用宝 10009-企微智能机器人 10014-企微智能机器人 10011-LINE 10012-Telegram 10013-钉钉机器人 10016-飞书机器人 30000-定时任务 30001-触发器 </li><li><strong>FeedbackType</strong> :   反馈类型，-1-表示全部 0-未评价 1-点赞 2-点踩 </li><li><strong>QueryType</strong> :    检索类型（按平台约定取值）, SessionId-sessionID Question-问题  Answer-回复 Intent-意图 User-用户 </li><li><strong>Query</strong> : 对应QueryType输入的过滤条件 </li><li><strong>CategoryId</strong> :  分类ID </li><li><strong>ReplyMethod</strong> :  回复类型 0-全部回复类型  1-拒答问题回复 2-问答直接回复 3-审核失败回复 4-知识润色回复 6-工作流回复 8-图片理解回复 9-搜索引擎回复 10-大模型直接回复 11-兜底回复 </li><li><strong>StartTime</strong> : 开始时间，秒级时间戳 </li><li><strong>EndTime</strong>:  结束时间，秒级时间戳 </li><li><strong>Cursor</strong> : 游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor  </li><li><strong>Direction</strong> : 方向，next 下一页，prev 上一页</li><li><strong>CallResult</strong> : 调用结果：0 全部 / 1 成功 / 2 失败 / 3 用户取消 &lt;</li><li><strong>FailReason</strong> : 失败原因 0-全部  1-审核失败 2-达到QPM上限 3-达到TPM上限 4-达到并发上限  5-系统异常 </li><li><strong>Intent</strong> :  意图</li></ul>
 * @method void setFilterList(array $FilterList) 设置<ul><li><strong>ChannelType</strong> :   0-表示全部 2-体验页面（腾讯云）3-调试页面（腾讯云）4-体验页面（手机号）5-对话端API接入 6-应用评测 7-调试API&#39; 10000-微信服务号 10001-微信订阅号 10002-企微应用 10004-微信客服 10005-微信小程序 10006-腾讯元器 10007-应用宝 10009-企微智能机器人 10014-企微智能机器人 10011-LINE 10012-Telegram 10013-钉钉机器人 10016-飞书机器人 30000-定时任务 30001-触发器 </li><li><strong>FeedbackType</strong> :   反馈类型，-1-表示全部 0-未评价 1-点赞 2-点踩 </li><li><strong>QueryType</strong> :    检索类型（按平台约定取值）, SessionId-sessionID Question-问题  Answer-回复 Intent-意图 User-用户 </li><li><strong>Query</strong> : 对应QueryType输入的过滤条件 </li><li><strong>CategoryId</strong> :  分类ID </li><li><strong>ReplyMethod</strong> :  回复类型 0-全部回复类型  1-拒答问题回复 2-问答直接回复 3-审核失败回复 4-知识润色回复 6-工作流回复 8-图片理解回复 9-搜索引擎回复 10-大模型直接回复 11-兜底回复 </li><li><strong>StartTime</strong> : 开始时间，秒级时间戳 </li><li><strong>EndTime</strong>:  结束时间，秒级时间戳 </li><li><strong>Cursor</strong> : 游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor  </li><li><strong>Direction</strong> : 方向，next 下一页，prev 上一页</li><li><strong>CallResult</strong> : 调用结果：0 全部 / 1 成功 / 2 失败 / 3 用户取消 &lt;</li><li><strong>FailReason</strong> : 失败原因 0-全部  1-审核失败 2-达到QPM上限 3-达到TPM上限 4-达到并发上限  5-系统异常 </li><li><strong>Intent</strong> :  意图</li></ul>
 * @method integer getPageNumber() 获取<p>页码，从 0 开始；不传时按 0 处理</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从 0 开始；不传时按 0 处理</p>
 * @method integer getPageSize() 获取<p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
 * @method Sort getSort() 获取<p>排序条件，只支持按 CreateTime 排序</p>
 * @method void setSort(Sort $Sort) 设置<p>排序条件，只支持按 CreateTime 排序</p>
 */
class DescribeMsgRecordListRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var array <ul><li><strong>ChannelType</strong> :   0-表示全部 2-体验页面（腾讯云）3-调试页面（腾讯云）4-体验页面（手机号）5-对话端API接入 6-应用评测 7-调试API&#39; 10000-微信服务号 10001-微信订阅号 10002-企微应用 10004-微信客服 10005-微信小程序 10006-腾讯元器 10007-应用宝 10009-企微智能机器人 10014-企微智能机器人 10011-LINE 10012-Telegram 10013-钉钉机器人 10016-飞书机器人 30000-定时任务 30001-触发器 </li><li><strong>FeedbackType</strong> :   反馈类型，-1-表示全部 0-未评价 1-点赞 2-点踩 </li><li><strong>QueryType</strong> :    检索类型（按平台约定取值）, SessionId-sessionID Question-问题  Answer-回复 Intent-意图 User-用户 </li><li><strong>Query</strong> : 对应QueryType输入的过滤条件 </li><li><strong>CategoryId</strong> :  分类ID </li><li><strong>ReplyMethod</strong> :  回复类型 0-全部回复类型  1-拒答问题回复 2-问答直接回复 3-审核失败回复 4-知识润色回复 6-工作流回复 8-图片理解回复 9-搜索引擎回复 10-大模型直接回复 11-兜底回复 </li><li><strong>StartTime</strong> : 开始时间，秒级时间戳 </li><li><strong>EndTime</strong>:  结束时间，秒级时间戳 </li><li><strong>Cursor</strong> : 游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor  </li><li><strong>Direction</strong> : 方向，next 下一页，prev 上一页</li><li><strong>CallResult</strong> : 调用结果：0 全部 / 1 成功 / 2 失败 / 3 用户取消 &lt;</li><li><strong>FailReason</strong> : 失败原因 0-全部  1-审核失败 2-达到QPM上限 3-达到TPM上限 4-达到并发上限  5-系统异常 </li><li><strong>Intent</strong> :  意图</li></ul>
     */
    public $FilterList;

    /**
     * @var integer <p>页码，从 0 开始；不传时按 0 处理</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
     */
    public $PageSize;

    /**
     * @var Sort <p>排序条件，只支持按 CreateTime 排序</p>
     */
    public $Sort;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param array $FilterList <ul><li><strong>ChannelType</strong> :   0-表示全部 2-体验页面（腾讯云）3-调试页面（腾讯云）4-体验页面（手机号）5-对话端API接入 6-应用评测 7-调试API&#39; 10000-微信服务号 10001-微信订阅号 10002-企微应用 10004-微信客服 10005-微信小程序 10006-腾讯元器 10007-应用宝 10009-企微智能机器人 10014-企微智能机器人 10011-LINE 10012-Telegram 10013-钉钉机器人 10016-飞书机器人 30000-定时任务 30001-触发器 </li><li><strong>FeedbackType</strong> :   反馈类型，-1-表示全部 0-未评价 1-点赞 2-点踩 </li><li><strong>QueryType</strong> :    检索类型（按平台约定取值）, SessionId-sessionID Question-问题  Answer-回复 Intent-意图 User-用户 </li><li><strong>Query</strong> : 对应QueryType输入的过滤条件 </li><li><strong>CategoryId</strong> :  分类ID </li><li><strong>ReplyMethod</strong> :  回复类型 0-全部回复类型  1-拒答问题回复 2-问答直接回复 3-审核失败回复 4-知识润色回复 6-工作流回复 8-图片理解回复 9-搜索引擎回复 10-大模型直接回复 11-兜底回复 </li><li><strong>StartTime</strong> : 开始时间，秒级时间戳 </li><li><strong>EndTime</strong>:  结束时间，秒级时间戳 </li><li><strong>Cursor</strong> : 游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor  </li><li><strong>Direction</strong> : 方向，next 下一页，prev 上一页</li><li><strong>CallResult</strong> : 调用结果：0 全部 / 1 成功 / 2 失败 / 3 用户取消 &lt;</li><li><strong>FailReason</strong> : 失败原因 0-全部  1-审核失败 2-达到QPM上限 3-达到TPM上限 4-达到并发上限  5-系统异常 </li><li><strong>Intent</strong> :  意图</li></ul>
     * @param integer $PageNumber <p>页码，从 0 开始；不传时按 0 处理</p>
     * @param integer $PageSize <p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
     * @param Sort $Sort <p>排序条件，只支持按 CreateTime 排序</p>
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

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
