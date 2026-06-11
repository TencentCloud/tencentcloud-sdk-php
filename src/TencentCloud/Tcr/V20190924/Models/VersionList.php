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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型版本详情
 *
 * @method string getVersion() 获取
 * @method void setVersion(string $Version) 设置
 * @method integer getSize() 获取
 * @method void setSize(integer $Size) 设置
 * @method boolean getIsRecommended() 获取
 * @method void setIsRecommended(boolean $IsRecommended) 设置
 * @method string getPushTime() 获取
 * @method void setPushTime(string $PushTime) 设置
 */
class VersionList extends AbstractModel
{
    /**
     * @var string 
     */
    public $Version;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @var boolean 
     */
    public $IsRecommended;

    /**
     * @var string 
     */
    public $PushTime;

    /**
     * @param string $Version 
     * @param integer $Size 
     * @param boolean $IsRecommended 
     * @param string $PushTime 
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("IsRecommended",$param) and $param["IsRecommended"] !== null) {
            $this->IsRecommended = $param["IsRecommended"];
        }

        if (array_key_exists("PushTime",$param) and $param["PushTime"] !== null) {
            $this->PushTime = $param["PushTime"];
        }
    }
}
