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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDoc请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method boolean getIsRefer() 获取是否引用链接
 * @method void setIsRefer(boolean $IsRefer) 设置是否引用链接
 * @method integer getAttrRange() 获取标签适用范围，需要传参为1
 * @method void setAttrRange(integer $AttrRange) 设置标签适用范围，需要传参为1
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method array getAttrLabels() 获取关联的标签
 * @method void setAttrLabels(array $AttrLabels) 设置关联的标签
 * @method string getWebUrl() 获取网页(或自定义链接)地址
 * @method void setWebUrl(string $WebUrl) 设置网页(或自定义链接)地址
 * @method integer getReferUrlType() 获取外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
 * @method void setReferUrlType(integer $ReferUrlType) 设置外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
 * @method string getExpireStart() 获取有效开始时间，unix时间戳
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，unix时间戳
 * @method string getExpireEnd() 获取有效结束时间，unix时间戳，0代表永久有效
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，unix时间戳，0代表永久有效
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method boolean getIsDownload() 获取是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
 * @method void setIsDownload(boolean $IsDownload) 设置是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
 */
class ModifyDocRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var boolean 是否引用链接
     */
    public $IsRefer;

    /**
     * @var integer 标签适用范围，需要传参为1
     */
    public $AttrRange;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var array 关联的标签
     */
    public $AttrLabels;

    /**
     * @var string 网页(或自定义链接)地址
     */
    public $WebUrl;

    /**
     * @var integer 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
     */
    public $ReferUrlType;

    /**
     * @var string 有效开始时间，unix时间戳
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，unix时间戳，0代表永久有效
     */
    public $ExpireEnd;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var boolean 是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
     */
    public $IsDownload;

    /**
     * @param string $BotBizId 应用ID
     * @param string $DocBizId 文档ID
     * @param boolean $IsRefer 是否引用链接
     * @param integer $AttrRange 标签适用范围，需要传参为1
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param array $AttrLabels 关联的标签
     * @param string $WebUrl 网页(或自定义链接)地址
     * @param integer $ReferUrlType 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
     * @param string $ExpireStart 有效开始时间，unix时间戳
     * @param string $ExpireEnd 有效结束时间，unix时间戳，0代表永久有效
     * @param string $CateBizId 分类ID
     * @param boolean $IsDownload 是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("IsDownload",$param) and $param["IsDownload"] !== null) {
            $this->IsDownload = $param["IsDownload"];
        }
    }
}
