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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体信息
 *
 * @method string getStrAction() 获取动作
 * @method void setStrAction(string $StrAction) 设置动作
 * @method string getStrContent() 获取内容
 * @method void setStrContent(string $StrContent) 设置内容
 * @method string getStrFileID() 获取文件ID
 * @method void setStrFileID(string $StrFileID) 设置文件ID
 * @method string getStrMD5() 获取md5，填了可提高识别率
 * @method void setStrMD5(string $StrMD5) 设置md5，填了可提高识别率
 * @method string getStrSha() 获取Sha
 * @method void setStrSha(string $StrSha) 设置Sha
 * @method string getStrTitle() 获取标题
 * @method void setStrTitle(string $StrTitle) 设置标题
 * @method string getStrUrl() 获取url
 * @method void setStrUrl(string $StrUrl) 设置url
 * @method integer getUiSize() 获取大小
 * @method void setUiSize(integer $UiSize) 设置大小
 */
class MediaInfoTypeGjh extends AbstractModel
{
    /**
     * @var string 动作
     */
    public $StrAction;

    /**
     * @var string 内容
     */
    public $StrContent;

    /**
     * @var string 文件ID
     */
    public $StrFileID;

    /**
     * @var string md5，填了可提高识别率
     */
    public $StrMD5;

    /**
     * @var string Sha
     */
    public $StrSha;

    /**
     * @var string 标题
     */
    public $StrTitle;

    /**
     * @var string url
     */
    public $StrUrl;

    /**
     * @var integer 大小
     */
    public $UiSize;

    /**
     * @param string $StrAction 动作
     * @param string $StrContent 内容
     * @param string $StrFileID 文件ID
     * @param string $StrMD5 md5，填了可提高识别率
     * @param string $StrSha Sha
     * @param string $StrTitle 标题
     * @param string $StrUrl url
     * @param integer $UiSize 大小
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
        if (array_key_exists("StrAction",$param) and $param["StrAction"] !== null) {
            $this->StrAction = $param["StrAction"];
        }

        if (array_key_exists("StrContent",$param) and $param["StrContent"] !== null) {
            $this->StrContent = $param["StrContent"];
        }

        if (array_key_exists("StrFileID",$param) and $param["StrFileID"] !== null) {
            $this->StrFileID = $param["StrFileID"];
        }

        if (array_key_exists("StrMD5",$param) and $param["StrMD5"] !== null) {
            $this->StrMD5 = $param["StrMD5"];
        }

        if (array_key_exists("StrSha",$param) and $param["StrSha"] !== null) {
            $this->StrSha = $param["StrSha"];
        }

        if (array_key_exists("StrTitle",$param) and $param["StrTitle"] !== null) {
            $this->StrTitle = $param["StrTitle"];
        }

        if (array_key_exists("StrUrl",$param) and $param["StrUrl"] !== null) {
            $this->StrUrl = $param["StrUrl"];
        }

        if (array_key_exists("UiSize",$param) and $param["UiSize"] !== null) {
            $this->UiSize = $param["UiSize"];
        }
    }
}
