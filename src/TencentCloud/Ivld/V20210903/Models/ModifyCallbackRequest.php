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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCallback请求参数结构体
 *
 * @method string getTaskFinishNotifyURL() 获取任务分析完成后回调地址
 * @method void setTaskFinishNotifyURL(string $TaskFinishNotifyURL) 设置任务分析完成后回调地址
 * @method string getMediaFinishNotifyURL() 获取媒体导入完成后回调地址
 * @method void setMediaFinishNotifyURL(string $MediaFinishNotifyURL) 设置媒体导入完成后回调地址
 */
class ModifyCallbackRequest extends AbstractModel
{
    /**
     * @var string 任务分析完成后回调地址
     */
    public $TaskFinishNotifyURL;

    /**
     * @var string 媒体导入完成后回调地址
     */
    public $MediaFinishNotifyURL;

    /**
     * @param string $TaskFinishNotifyURL 任务分析完成后回调地址
     * @param string $MediaFinishNotifyURL 媒体导入完成后回调地址
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
        if (array_key_exists("TaskFinishNotifyURL",$param) and $param["TaskFinishNotifyURL"] !== null) {
            $this->TaskFinishNotifyURL = $param["TaskFinishNotifyURL"];
        }

        if (array_key_exists("MediaFinishNotifyURL",$param) and $param["MediaFinishNotifyURL"] !== null) {
            $this->MediaFinishNotifyURL = $param["MediaFinishNotifyURL"];
        }
    }
}
