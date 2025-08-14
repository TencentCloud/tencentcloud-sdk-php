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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知内容模板信息
 *
 * @method string getNoticeContentId() 获取通知内容模板ID。
 * @method void setNoticeContentId(string $NoticeContentId) 设置通知内容模板ID。
 * @method string getName() 获取通知内容模板名称
 * @method void setName(string $Name) 设置通知内容模板名称
 * @method integer getType() 获取语言类型。

0： 中文
1： 英文
 * @method void setType(integer $Type) 设置语言类型。

0： 中文
1： 英文
 * @method array getNoticeContents() 获取通知内容模板信息。
 * @method void setNoticeContents(array $NoticeContents) 设置通知内容模板信息。
 * @method integer getFlag() 获取通知内容模板标记。

0： 用户自定义
1： 系统内置
 * @method void setFlag(integer $Flag) 设置通知内容模板标记。

0： 用户自定义
1： 系统内置
 * @method integer getUin() 获取创建者主账号。
 * @method void setUin(integer $Uin) 设置创建者主账号。
 * @method integer getSubUin() 获取创建/修改者子账号。
 * @method void setSubUin(integer $SubUin) 设置创建/修改者子账号。
 * @method integer getCreateTime() 获取创建时间 秒级(s)时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间 秒级(s)时间戳。
 * @method integer getUpdateTime() 获取更新时间 秒级(s)时间戳。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间 秒级(s)时间戳。
 */
class NoticeContentTemplate extends AbstractModel
{
    /**
     * @var string 通知内容模板ID。
     */
    public $NoticeContentId;

    /**
     * @var string 通知内容模板名称
     */
    public $Name;

    /**
     * @var integer 语言类型。

0： 中文
1： 英文
     */
    public $Type;

    /**
     * @var array 通知内容模板信息。
     */
    public $NoticeContents;

    /**
     * @var integer 通知内容模板标记。

0： 用户自定义
1： 系统内置
     */
    public $Flag;

    /**
     * @var integer 创建者主账号。
     */
    public $Uin;

    /**
     * @var integer 创建/修改者子账号。
     */
    public $SubUin;

    /**
     * @var integer 创建时间 秒级(s)时间戳。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间 秒级(s)时间戳。
     */
    public $UpdateTime;

    /**
     * @param string $NoticeContentId 通知内容模板ID。
     * @param string $Name 通知内容模板名称
     * @param integer $Type 语言类型。

0： 中文
1： 英文
     * @param array $NoticeContents 通知内容模板信息。
     * @param integer $Flag 通知内容模板标记。

0： 用户自定义
1： 系统内置
     * @param integer $Uin 创建者主账号。
     * @param integer $SubUin 创建/修改者子账号。
     * @param integer $CreateTime 创建时间 秒级(s)时间戳。
     * @param integer $UpdateTime 更新时间 秒级(s)时间戳。
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
        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeContents",$param) and $param["NoticeContents"] !== null) {
            $this->NoticeContents = [];
            foreach ($param["NoticeContents"] as $key => $value){
                $obj = new NoticeContent();
                $obj->deserialize($value);
                array_push($this->NoticeContents, $obj);
            }
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
