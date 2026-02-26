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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNoticeContentTmpl请求参数结构体
 *
 * @method integer getPageNumber() 获取分页数
 * @method void setPageNumber(integer $PageNumber) 设置分页数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method array getTmplIDs() 获取指定模板ID查询，查询参数都为空则默认查询账号下所有模板
 * @method void setTmplIDs(array $TmplIDs) 设置指定模板ID查询，查询参数都为空则默认查询账号下所有模板
 * @method string getTmplName() 获取指定模板名称查询，查询参数都为空则默认查询账号下所有模板
 * @method void setTmplName(string $TmplName) 设置指定模板名称查询，查询参数都为空则默认查询账号下所有模板
 * @method string getNoticeID() 获取指定通知模板ID查询，查询参数都为空则默认查询账号下所有模板
 * @method void setNoticeID(string $NoticeID) 设置指定通知模板ID查询，查询参数都为空则默认查询账号下所有模板
 * @method string getTmplLanguage() 获取模板语言 en/zh 缺省不过滤
 * @method void setTmplLanguage(string $TmplLanguage) 设置模板语言 en/zh 缺省不过滤
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 */
class DescribeNoticeContentTmplRequest extends AbstractModel
{
    /**
     * @var integer 分页数
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var array 指定模板ID查询，查询参数都为空则默认查询账号下所有模板
     */
    public $TmplIDs;

    /**
     * @var string 指定模板名称查询，查询参数都为空则默认查询账号下所有模板
     */
    public $TmplName;

    /**
     * @var string 指定通知模板ID查询，查询参数都为空则默认查询账号下所有模板
     */
    public $NoticeID;

    /**
     * @var string 模板语言 en/zh 缺省不过滤
     */
    public $TmplLanguage;

    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @param integer $PageNumber 分页数
     * @param integer $PageSize 分页大小
     * @param array $TmplIDs 指定模板ID查询，查询参数都为空则默认查询账号下所有模板
     * @param string $TmplName 指定模板名称查询，查询参数都为空则默认查询账号下所有模板
     * @param string $NoticeID 指定通知模板ID查询，查询参数都为空则默认查询账号下所有模板
     * @param string $TmplLanguage 模板语言 en/zh 缺省不过滤
     * @param string $MonitorType 监控类型
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TmplIDs",$param) and $param["TmplIDs"] !== null) {
            $this->TmplIDs = $param["TmplIDs"];
        }

        if (array_key_exists("TmplName",$param) and $param["TmplName"] !== null) {
            $this->TmplName = $param["TmplName"];
        }

        if (array_key_exists("NoticeID",$param) and $param["NoticeID"] !== null) {
            $this->NoticeID = $param["NoticeID"];
        }

        if (array_key_exists("TmplLanguage",$param) and $param["TmplLanguage"] !== null) {
            $this->TmplLanguage = $param["TmplLanguage"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
