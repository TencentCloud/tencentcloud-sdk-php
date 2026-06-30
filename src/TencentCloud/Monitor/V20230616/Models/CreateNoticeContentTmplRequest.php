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
 * CreateNoticeContentTmpl请求参数结构体
 *
 * @method string getTmplName() 获取<p>模板名称</p>
 * @method void setTmplName(string $TmplName) 设置<p>模板名称</p>
 * @method string getMonitorType() 获取<p>监控类型</p>
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型</p>
 * @method NoticeContentTmplItem getTmplContents() 获取<p>模板内容</p>
 * @method void setTmplContents(NoticeContentTmplItem $TmplContents) 设置<p>模板内容</p>
 * @method string getTmplLanguage() 获取<p>模板语言 en/zh</p>
 * @method void setTmplLanguage(string $TmplLanguage) 设置<p>模板语言 en/zh</p>
 */
class CreateNoticeContentTmplRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称</p>
     */
    public $TmplName;

    /**
     * @var string <p>监控类型</p>
     */
    public $MonitorType;

    /**
     * @var NoticeContentTmplItem <p>模板内容</p>
     */
    public $TmplContents;

    /**
     * @var string <p>模板语言 en/zh</p>
     */
    public $TmplLanguage;

    /**
     * @param string $TmplName <p>模板名称</p>
     * @param string $MonitorType <p>监控类型</p>
     * @param NoticeContentTmplItem $TmplContents <p>模板内容</p>
     * @param string $TmplLanguage <p>模板语言 en/zh</p>
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
        if (array_key_exists("TmplName",$param) and $param["TmplName"] !== null) {
            $this->TmplName = $param["TmplName"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("TmplContents",$param) and $param["TmplContents"] !== null) {
            $this->TmplContents = new NoticeContentTmplItem();
            $this->TmplContents->deserialize($param["TmplContents"]);
        }

        if (array_key_exists("TmplLanguage",$param) and $param["TmplLanguage"] !== null) {
            $this->TmplLanguage = $param["TmplLanguage"];
        }
    }
}
