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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 腾讯云日志服务相关参数
 *
 * @method boolean getEnable() 获取是否启用
 * @method void setEnable(boolean $Enable) 设置是否启用
 * @method string getLogSet() 获取日志集
 * @method void setLogSet(string $LogSet) 设置日志集
 * @method string getTopic() 获取日志主题
 * @method void setTopic(string $Topic) 设置日志主题
 * @method boolean getNeedDelete() 获取是否删除
 * @method void setNeedDelete(boolean $NeedDelete) 设置是否删除
 */
class CLS extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enable;

    /**
     * @var string 日志集
     */
    public $LogSet;

    /**
     * @var string 日志主题
     */
    public $Topic;

    /**
     * @var boolean 是否删除
     */
    public $NeedDelete;

    /**
     * @param boolean $Enable 是否启用
     * @param string $LogSet 日志集
     * @param string $Topic 日志主题
     * @param boolean $NeedDelete 是否删除
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("NeedDelete",$param) and $param["NeedDelete"] !== null) {
            $this->NeedDelete = $param["NeedDelete"];
        }
    }
}
