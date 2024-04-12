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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布文档详情
 *
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getAction() 获取状态
 * @method void setAction(integer $Action) 设置状态
 * @method string getActionDesc() 获取状态描述
 * @method void setActionDesc(string $ActionDesc) 设置状态描述
 * @method string getMessage() 获取失败原因
 * @method void setMessage(string $Message) 设置失败原因
 * @method string getDocBizId() 获取文档业务ID
 * @method void setDocBizId(string $DocBizId) 设置文档业务ID
 */
class ReleaseDoc extends AbstractModel
{
    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 状态
     */
    public $Action;

    /**
     * @var string 状态描述
     */
    public $ActionDesc;

    /**
     * @var string 失败原因
     */
    public $Message;

    /**
     * @var string 文档业务ID
     */
    public $DocBizId;

    /**
     * @param string $FileName 文件名
     * @param string $FileType 文件类型
     * @param string $UpdateTime 更新时间
     * @param integer $Action 状态
     * @param string $ActionDesc 状态描述
     * @param string $Message 失败原因
     * @param string $DocBizId 文档业务ID
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }
    }
}
