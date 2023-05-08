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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过路过桥费发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getEntrance() 获取入口
 * @method void setEntrance(string $Entrance) 设置入口
 * @method string getExit() 获取出口
 * @method void setExit(string $Exit) 设置出口
 * @method integer getHighwayMark() 获取高速标志（0：没有，1：有）
 * @method void setHighwayMark(integer $HighwayMark) 设置高速标志（0：没有，1：有）
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 */
class TollInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 价税合计（小写）
     */
    public $Total;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 入口
     */
    public $Entrance;

    /**
     * @var string 出口
     */
    public $Exit;

    /**
     * @var integer 高速标志（0：没有，1：有）
     */
    public $HighwayMark;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @param string $Title 发票名称
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Total 价税合计（小写）
     * @param string $Kind 发票消费类型
     * @param string $Date 日期
     * @param string $Time 时间
     * @param string $Entrance 入口
     * @param string $Exit 出口
     * @param integer $HighwayMark 高速标志（0：没有，1：有）
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Entrance",$param) and $param["Entrance"] !== null) {
            $this->Entrance = $param["Entrance"];
        }

        if (array_key_exists("Exit",$param) and $param["Exit"] !== null) {
            $this->Exit = $param["Exit"];
        }

        if (array_key_exists("HighwayMark",$param) and $param["HighwayMark"] !== null) {
            $this->HighwayMark = $param["HighwayMark"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }
    }
}
