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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播审核图库删除图片详细结果。
 *
 * @method string getImageId() 获取<p>图片 Id。</p>
 * @method void setImageId(string $ImageId) 设置<p>图片 Id。</p>
 * @method string getName() 获取<p>图片名称</p>
 * @method void setName(string $Name) 设置<p>图片名称</p>
 * @method integer getStatus() 获取<p>删除状态。<br>0：成功。<br>10104：原图不存在。<br>40201:  图库删图失败。<br>20201:  图库记录删除失败。</p>
 * @method void setStatus(integer $Status) 设置<p>删除状态。<br>0：成功。<br>10104：原图不存在。<br>40201:  图库删图失败。<br>20201:  图库记录删除失败。</p>
 * @method string getLabel() 获取<p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
 * @method void setLabel(string $Label) 设置<p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
 * @method string getErrMsg() 获取<p>错误信息。</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息。</p>
 */
class AuditImageDeleteDetail extends AbstractModel
{
    /**
     * @var string <p>图片 Id。</p>
     */
    public $ImageId;

    /**
     * @var string <p>图片名称</p>
     */
    public $Name;

    /**
     * @var integer <p>删除状态。<br>0：成功。<br>10104：原图不存在。<br>40201:  图库删图失败。<br>20201:  图库记录删除失败。</p>
     */
    public $Status;

    /**
     * @var string <p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
     */
    public $Label;

    /**
     * @var string <p>错误信息。</p>
     */
    public $ErrMsg;

    /**
     * @param string $ImageId <p>图片 Id。</p>
     * @param string $Name <p>图片名称</p>
     * @param integer $Status <p>删除状态。<br>0：成功。<br>10104：原图不存在。<br>40201:  图库删图失败。<br>20201:  图库记录删除失败。</p>
     * @param string $Label <p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
     * @param string $ErrMsg <p>错误信息。</p>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
